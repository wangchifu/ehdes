<?php
include_once("config.php");
session_start();

$post = $_POST;
$get = $_GET;
if($post){
    $username = explode('@',$post['username']);
    $data = array("email"=>$username[0],"password"=>$post['password']);
    $data_string = json_encode($data);
    $ch = curl_init('https://school.chc.edu.tw/api/auth');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
    );
    $result = curl_exec($ch);
    $obj = json_decode($result,true);
    if($obj['success']) {
        if($obj['kind'] === "學生"){
            header('Location:login.php?error=學生不可以來');
            die();
        }
        if($obj['code'] != "074628"){
            header('Location:login.php?error=只限和東國小教職員進入');
            die();
        }

        $uid = $obj['uid'];
        $edu_key = $obj['edu_key'];
        $name = $obj['name'];
        $kind = $obj['kind'];//教職員
        $title = $obj['title'];//xx組長
        $code = $obj['code'];//074628
        $school = $obj['school'];//和東國小

        $sql = "select * from users where username = '{$username[0]}'";
        $user = sql_select($sql);

        if($user[0]){
            if($user[0]['disable']==1){
                header('Location:login.php?error=你已離職');
                die();
            }
            $_SESSION['user'] = $user[0];
        }else{
            $sql = "insert users (username,name,kind,title) value ('{$username[0]}','{$name}','{$kind}','{$title}')";
            sql_exec($sql);
            $_SESSION['user']['username'] = $username[0];
            $_SESSION['user']['name'] = $name;
            $_SESSION['user']['kind'] = $kind;
            $_SESSION['user']['title'] = $title;
        }

    }else{
        header('Location:login.php?error=帳密錯誤');
        die();
    }
}


$error = ($get)?$get['error']:"";


if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}else{
    $user['username'] = "";
    $user['admin'] = "";
}
$page = $_SERVER['PHP_SELF'];

//已登入者，導進index.php
if($user['username']){
    if(isset($_SESSION['want_url'])){
        $url = $_SESSION['want_url'];
        header('Location:'.$url);
        die();
    }else{
        header('Location:index.php');
        die();
    }
}


$template_file = "login.tpl";
$smarty->assign('error',$error);
$smarty->assign('user',$user);
$smarty->assign('page',$page);
$smarty->display($template_file);