<?php
include_once("config.php");
session_start();
check_login();

$fix_id = $_GET['id'];
$sql = "select a.id,a.user_id,a.situation,a.created_at,b.name,a.title,a.content,a.reply,a.updated_at from fixes as a left join users as b on a.user_id=b.id where a.id='{$fix_id}' order by a.id DESC";

$fix = sql_select($sql);
$content = nl2br($fix[0]['content']);

$admin = check_module_admin('fix');

if($fix[0]['situation']==3 or $fix[0]['situation']==2){
    $select1 = "";
    $select2 = "selected";
}
if($fix[0]['situation']==1){
    $select1 = "selected";
    $select2 = "";
}

$template_file = "fix_show.tpl";
$smarty->assign('user',$_SESSION['user']);
$smarty->assign('fix',$fix[0]);
$smarty->assign('content',$content);
$smarty->assign('admin',$admin);
$smarty->assign('select1',$select1);
$smarty->assign('select2',$select2);
$smarty->display($template_file);