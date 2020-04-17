<?php
include_once("config.php");
session_start();
check_login();

$template_file = "fix_create.tpl";
$smarty->assign('user',$_SESSION['user']);
$smarty->display($template_file);