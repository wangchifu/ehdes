<?php

//自動建立目錄
function autoDir($dir){
//echo $dir.'<br>';
    if (file_exists($dir) && is_dir($dir))	return ;
    $rs = @mkdir($dir, 0755);
    if (!$rs) backe($dir."資料存放區\n 不存在或無法建立");
}

function school_API(){
    global $API_client_id,$API_client_secret;

// =================================================
// 學生榮譽榜 (url: https://api.chc.edu.tw)
// 校務佈告欄 (url: https://api.chc.edu.tw/school-news)
// 同步學期資料 (url: https://api.chc.edu.tw/semester-data)
// 更改師生密碼 (url: https://api.chc.edu.tw/change-password)
    $api_name = '/semester-data';
    //$api_name = '/change-password';
// API URL
    $api_url = 'https://api.chc.edu.tw';
// 建立 CURL 連線
    $ch = curl_init();
// 取 access token
    curl_setopt($ch, CURLOPT_URL, $api_url."/oauth?authorize");
// 設定擷取的URL網址
    curl_setopt($ch, CURLOPT_POST, TRUE);

// the variable
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    curl_setopt($ch, CURLOPT_POSTFIELDS, array(
        'client_id' => $API_client_id,
        'client_secret' => $API_client_secret,
        'grant_type' => 'client_credentials'
    ));

    $data = curl_exec($ch);
    $data = json_decode($data);

    $access_token = $data->access_token;
    $authorization = "Authorization: Bearer ".$access_token;

    curl_setopt($ch, CURLOPT_URL, $api_url.$api_name);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // **Inject Token into Header**
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    return $result;
}

//物件轉為陣列的函式
function objectToArray($d) {
    if (is_object($d)) {
        $d = get_object_vars($d);
    }
    if (is_array($d)) {
        return array_map(__FUNCTION__, $d);
    }
    else {
        return $d;
    }
}

/**
while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
echo $row['user'] . ' ' . $row['pwd']."<br>";
}
 */
//select
function sql_select($sql){
    global $connection;
    $statement = $connection->query($sql);
    $i = 0;
    $data = [];
    foreach($statement as $row){
        $data[$i] = $row;
        $i++;
    }
    return $data;
}

function sql_exec($sql){
    global $connection;
    $connection->exec($sql);
}

function check_login(){
    if($_SESSION['user']['username']==""){
        $_SESSION['want_url'] = $_SERVER['REQUEST_URI'];
        header('Location:login.php');
        die();
    }
}

function check_admin(){
    if($_SESSION['user']['admin'] != 1){
        header('Location:index.php');
        die();
    }

}

function check_module_admin($name){
    $sql = "select * from admins where module='{$name}' and user_id='{$_SESSION['user']['id']}'";
    $power = sql_select($sql);

    if(isset($power[0]['id'])){
        return true;
    }else{
        return false;
    }
}

function sql2($per,$sql){
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }
    $start = ($page-1)*$per; //每一頁開始的資料序號
    $sql2 = $sql.' LIMIT '.$start.', '.$per;
    return $sql2;
}

function paginate($data_nums,$per){
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }
    $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
    //分頁頁碼
    $data = "<ul class='pagination'><li class='page-item'><a class='page-link' href=?page=1><<</a></li>";
    if($page>1){
        $p = $page-1;
        $data .= "<li class='page-item'><a class='page-link' href=?page=".$p."><</a></li>";
    }
    for( $i=1 ; $i<=$pages ; $i++ ) {
        if ( $page-5 < $i && $i < $page+5 ) {
            $active =($i==$page)?"active":"";
            $data .= "<li class='page-item {$active}'><a class='page-link' href=?page=".$i.">".$i."</a></li>";
        }
    }
    if($page<$pages){
        $n = $page+1;
        $data .= "<ul class='pagination'><li class='page-item'><a class='page-link' href=?page=".$n.">></a></li>";
    }
    if($pages==0) $pages = 1;
    $data .= "<li class='page-item'><a class='page-link' href=?page=".$pages.">>></a></li>";

    return $data;
}
