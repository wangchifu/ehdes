<?php
include_once("config.php");
session_start();
check_login();
check_admin();

$user_id = $_GET['user_id'];

$sql = "select * from users where id='{$user_id}'";
$select_user = sql_select($sql);

$sql = "select * from admins where user_id='{$user_id}'";
$select_power = sql_select($sql);
$i = 0;
$modules=[];
foreach($select_power as $v){
    $modules[$i] = $v['module'];
    $i++;
}


$calendar_check = (in_array('calendar',$modules))?"checked":"";
$meeting_check = (in_array('meeting',$modules))?"checked":"";
$file_check = (in_array('file',$modules))?"checked":"";
$report_check = (in_array('report',$modules))?"checked":"";
$fix_check = (in_array('fix',$modules))?"checked":"";
$lunch_check = (in_array('lunch',$modules))?"checked":"";
$reward_check = (in_array('reward',$modules))?"checked":"";
$sport_check = (in_array('sport',$modules))?"checked":"";

$sql = "select * from groups where user_id='{$user_id}'";
$select_group = sql_select($sql);
$i = 0;
$groups=[];
foreach($select_group as $v){
    $groups[$i] = $v['group_name'];
    $i++;
}

$exec_check = (in_array('exec',$groups))?"checked":"";
$classtea_check = (in_array('classtea',$groups))?"checked":"";
$subtea_check = (in_array('subtea',$groups))?"checked":"";

$disable_check1 = ($select_user[0]['disable'])?"":"checked";
$disable_check2 = ($select_user[0]['disable'])?"checked":"";

$admin_check = ($select_user[0]['admin']==1)?"checked":"";

$template_file = "admin_user_edit.tpl";
$smarty->assign('user',$_SESSION['user']);
$smarty->assign('select_user',$select_user[0]);
$smarty->assign('calendar_check',$calendar_check);
$smarty->assign('meeting_check',$meeting_check);
$smarty->assign('file_check',$file_check);
$smarty->assign('report_check',$report_check);
$smarty->assign('fix_check',$fix_check);
$smarty->assign('lunch_check',$lunch_check);
$smarty->assign('reward_check',$reward_check);
$smarty->assign('sport_check',$sport_check);

$smarty->assign('exec_check',$exec_check);
$smarty->assign('classtea_check',$classtea_check);
$smarty->assign('subtea_check',$subtea_check);

$smarty->assign('disable_check1',$disable_check1);
$smarty->assign('disable_check2',$disable_check2);
$smarty->assign('admin_check',$admin_check);
$smarty->display($template_file);