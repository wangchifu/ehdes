<?php
include_once("config.php");
session_start();
check_login();
check_admin();
$sql = "select * from `users` where disable is null order by order_by";
$users = sql_select($sql);

$sql = "select * from `groups` a left join `users` b on a.user_id=b.id where a.group_name='exec'";
$user_exec = sql_select($sql);

$sql = "select * from `groups` a left join `users` b on a.user_id=b.id where a.group_name='classtea'";
$user_classtea = sql_select($sql);

$sql = "select * from `groups` a left join `users` b on a.user_id=b.id where a.group_name='subtea'";
$user_subtea= sql_select($sql);

$template_file = "admin_group.tpl";
$smarty->assign('user',$_SESSION['user']);
$smarty->assign('users',$users);
$smarty->assign('user_exec',$user_exec);
$smarty->assign('user_classtea',$user_classtea);
$smarty->assign('user_subtea',$user_subtea);
$smarty->display($template_file);