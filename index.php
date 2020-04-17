<?php
include_once("config.php");
session_start();

$template_file = "index.tpl";

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}else{
    $user['username'] = "";
    $user['admin'] = "";
}
$page = $_SERVER['PHP_SELF'];

$page = (isset($page))?$page:"";
$smarty->assign('user',$user);
$smarty->assign('page',$page);
$smarty->display($template_file);