<?php
ini_set('display_errors','on');
//引入檔案
require_once('function.php');


require_once ('env.php');



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

