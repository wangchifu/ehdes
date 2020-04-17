<?php
include_once("config.php");
session_start();
check_login();

$sql = "select a.id,a.situation,a.created_at,b.name,a.title,a.updated_at from fixes as a left join users as b on a.user_id=b.id where a.situation='1' order by a.id DESC";
$fixes1 = sql_select($sql);

$fixes2 = sql_select(sql2(20,$sql));
$paginate = paginate(count($fixes1),20);


$p = "處理完畢";

$template_file = "fix.tpl";
$smarty->assign('user',$_SESSION['user']);
$smarty->assign('fixes',$fixes2);
$smarty->assign('paginate',$paginate);
$smarty->assign('p',$p);
$smarty->display($template_file);