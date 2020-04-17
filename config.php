<?php
ini_set('display_errors','on');
//引入檔案
require_once('function.php');

//須至 cloudschool API 設定那裡取得以下兩項
$API_client_id='9082f708e2c17cd259cdcc56d604f8e8';//貴校API的帳號
$API_client_secret='6fb52349a422f34d1b45c98ba492c9b5';//貴校API的密碼

$UPLOAD_PATH = "upload/";


$connection = new PDO('mysql:host=localhost;dbname=ehdes;charset=utf8', 'root', 'wang1026');




//--------Smarty啟動部分----------///
require_once('include/smarty3.1.34/libs/Smarty.class.php');
$Smarty_Compile_DIR=$UPLOAD_PATH.'tmp/';
autoDir($Smarty_Compile_DIR);


//建立物件
$smarty = new Smarty();
$smarty->compile_dir =$Smarty_Compile_DIR;//可寫入的編譯檔置放目錄(絕對路徑)
$smarty->left_delimiter = '{{';//設定樣本檔的左邊標籤
$smarty->right_delimiter = '}}';//設定樣本檔的右邊標籤

$module_name = [
    'calendar'=>'校務行事曆',
    'meeting'=>'會議文稿',
    'file'=>'內部文件',
    'report'=>'線上調查',
    'fix'=>'資訊設備報修',
    'lunch'=>'教職員午餐',
    'reward'=>'月考獎狀',
    'sport'=>'運動會報名',
];

