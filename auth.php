<?php
//須至 cloudschool API 設定那裡「已授權的重新導向 URI」
//引入設定檔 config.php ，其上有 API_client_id
include_once("config.php") ;
session_start();


if (isset($_GET['data']))
{
    //有回傳值
    if ($_GET['state'] == $_SESSION['state'])
    {
        //檢查 GET 回傳 state 值 是否與 $_SESSION['state'] 相同，若相同，表回傳值無偽造可信賴
        $data = json_decode($_GET['data']);
        //將物件轉為陣列
        $data = objectToArray($data) ;
        //教師帳號 $data 回傳內容有:
        //school_no       學校代碼
        //username        教職員帳號
        //role -> teacher 身分別(教職員)
        //name            教職員姓名
        //edu_key         身分證字號hash值
        //title_name      職稱，例資訊組長
        //title_kind      職別，例教師兼組長
        if ($data['role'] == 'teacher')
        {
            //僅供教職員登入
            //姓名和職稱寫入 SESSION
            $_SESSION['login_name'] = $data['name'] ;
            $_SESSION['login_title'] = $data['title_name'] ;
            //跳轉登入後首頁

            echo "<script>location.href= ('home.php');</script>";
        } else {
            echo "<script>alert ('您未被授權瀏覽本網頁!!'); location.href= ('index.php');</script>" ;
        }
    }
} else {
    //無回傳值，導向雲端校務系統 $apiUrl
    //以時間序做 md5 運算取前20碼作為 unique 狀態值
    $state = substr(md5(date('YmdHis')),0,20) ;
    $apiUrl = 'https://api.chc.edu.tw/school-oauth/authorize?client_id='.$API_client_id.'&response_type=code&state='.$state;
    //以 SESSION 記錄 $state 狀態值
    $_SESSION['state'] = $state ;
    header('Location: '.$apiUrl);
}