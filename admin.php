<?php
include_once("config.php");
session_start();
check_login();
check_admin();

$sql = "select * from users order by disable,order_by";
$users = sql_select($sql);

$sql = "select * from admins";
$powers = sql_select($sql);


foreach($powers as $power){
    $user_power[$power['user_id']][$power['module']] = $module_name[$power['module']];
}

foreach($users as $user){
    foreach($module_name as $k=>$v){
        if(isset($user_power[$user['id']][$k])){
            $data_power[$user['id']][$k] = $v;
        }else{
            $data_power[$user['id']][$k] = "";
        }
    }
}

$template_file = "admin.tpl";
$smarty->assign('user',$_SESSION['user']);
$smarty->assign('users',$users);
$smarty->assign('module_name',$module_name);
$smarty->assign('data_power',$data_power);
$smarty->display($template_file);