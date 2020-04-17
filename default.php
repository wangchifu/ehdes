<?php
include_once("config.php");
session_start();
check_login();
//check_admin();


$template_file = "admin.tpl";
$smarty->assign('user',$_SESSION['user']);
$smarty->display($template_file);