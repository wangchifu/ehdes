<?php
include_once("config.php");
session_start();
check_login();
check_admin();

$action = $_REQUEST['action'];

switch ($action) {
    case 'delete_user':
        $user_id = $_GET['user_id'];

        $sql = "delete from users where id='{$user_id}'";
        sql_exec($sql);

        header('Location:admin.php');

        break;

    case 'user_update':
        $user_id = $_POST['user_id'];

        $calendar = (isset($_POST['calendar']))?true:null;
        $meeting = (isset($_POST['meeting']))?true:null;
        $file = (isset($_POST['file']))?true:null;
        $report = (isset($_POST['report']))?true:null;
        $fix = (isset($_POST['fix']))?true:null;
        $lunch = (isset($_POST['lunch']))?true:null;
        $reward = (isset($_POST['reward']))?true:null;
        $sport = (isset($_POST['sport']))?true:null;

        $exec = (isset($_POST['exec']))?true:null;
        $classtea = (isset($_POST['classtea']))?true:null;
        $subtea = (isset($_POST['subtea']))?true:null;

        if($calendar){
            $sql = "select * from admins where user_id='{$user_id}' and module='calendar'";
            $select_power =  sql_select($sql);
            if(!isset($select_power[0]['module'])){
                $sql = "insert into admins (module,user_id) values ('calendar','{$user_id}')";
                sql_exec($sql);
            }
        }else{
            $sql = "delete from admins where user_id='{$user_id}' and module='calendar'";
            sql_exec($sql);
        }

        if($meeting){
            $sql = "select * from admins where user_id='{$user_id}' and module='meeting'";
            $select_power =  sql_select($sql);
            if(!isset($select_power[0]['module'])){
                $sql = "insert into admins (module,user_id) values ('meeting','{$user_id}')";
                sql_exec($sql);
            }
        }else{
            $sql = "delete from admins where user_id='{$user_id}' and module='meeting'";
            sql_exec($sql);
        }

        if($file){
            $sql = "select * from admins where user_id='{$user_id}' and module='file'";
            $select_power =  sql_select($sql);
            if(!isset($select_power[0]['module'])){
                $sql = "insert into admins (module,user_id) values ('file','{$user_id}')";
                sql_exec($sql);
            }
        }else{
            $sql = "delete from admins where user_id='{$user_id}' and module='file'";
            sql_exec($sql);
        }

        if($report){
            $sql = "select * from admins where user_id='{$user_id}' and module='report'";
            $select_power =  sql_select($sql);
            if(!isset($select_power[0]['module'])){
                $sql = "insert into admins (module,user_id) values ('report','{$user_id}')";
                sql_exec($sql);
            }
        }else{
            $sql = "delete from admins where user_id='{$user_id}' and module='report'";
            sql_exec($sql);
        }

        if($fix){
            $sql = "select * from admins where user_id='{$user_id}' and module='fix'";
            $select_power =  sql_select($sql);
            if(!isset($select_power[0]['module'])){
                $sql = "insert into admins (module,user_id) values ('fix','{$user_id}')";
                sql_exec($sql);
            }
        }else{
            $sql = "delete from admins where user_id='{$user_id}' and module='fix'";
            sql_exec($sql);
        }

        if($lunch){
            $sql = "select * from admins where user_id='{$user_id}' and module='lunch'";
            $select_power =  sql_select($sql);
            if(!isset($select_power[0]['module'])){
                $sql = "insert into admins (module,user_id) values ('lunch','{$user_id}')";
                sql_exec($sql);
            }
        }else{
            $sql = "delete from admins where user_id='{$user_id}' and module='lunch'";
            sql_exec($sql);
        }

        if($reward){
            $sql = "select * from admins where user_id='{$user_id}' and module='reward'";
            $select_power =  sql_select($sql);
            if(!isset($select_power[0]['module'])){
                $sql = "insert into admins (module,user_id) values ('reward','{$user_id}')";
                sql_exec($sql);
            }
        }else{
            $sql = "delete from admins where user_id='{$user_id}' and module='reward'";
            sql_exec($sql);
        }

        if($sport){
            $sql = "select * from admins where user_id='{$user_id}' and module='sport'";
            $select_power =  sql_select($sql);
            if(!isset($select_power[0]['module'])){
                $sql = "insert into admins (module,user_id) values ('sport','{$user_id}')";
                sql_exec($sql);
            }
        }else{
            $sql = "delete from admins where user_id='{$user_id}' and module='sport'";
            sql_exec($sql);
        }



        if($exec){
            $sql = "select * from groups where user_id='{$user_id}' and group_name = 'exec'";
            $select_group =  sql_select($sql);
            if(!isset($select_group[0]['group_name'])){
                $sql = "insert into groups (group_name,user_id) values ('exec','{$user_id}')";
                sql_exec($sql);
            }
        }else{
            $sql = "delete from groups where user_id='{$user_id}' and group_name='exec'";
            sql_exec($sql);
        }

        if($classtea){
            $sql = "select * from groups where user_id='{$user_id}' and group_name = 'classtea'";
            $select_group =  sql_select($sql);
            if(!isset($select_group[0]['group_name'])){
                $sql = "insert into groups (group_name,user_id) values ('classtea','{$user_id}')";
                sql_exec($sql);
            }
        }else{
            $sql = "delete from groups where user_id='{$user_id}' and group_name='classtea'";
            sql_exec($sql);
        }

        if($exec){
            $sql = "select * from groups where user_id='{$user_id}' and group_name = 'subtea'";
            $select_group =  sql_select($sql);
            if(!isset($select_group[0]['group_name'])){
                $sql = "insert into groups (group_name,user_id) values ('subtea','{$user_id}')";
                sql_exec($sql);
            }
        }else{
            $sql = "delete from groups where user_id='{$user_id}' and group_name='subtea'";
            sql_exec($sql);
        }




        $sql = "select * from users where id='{$user_id}'";
        $select_user = sql_select($sql);

        $order_by = ($_POST['order_by'])?$_POST['order_by']:"NULL";

        $disable = ($_POST['disable'])?1:"NULL";

        $admin = (isset($_POST['admin']))?1:"NULL";


        $sql = "update users set order_by = ".$order_by.",disable=".$disable.",admin=".$admin." where id='{$user_id}'";

        sql_exec($sql);

        header('Location:admin.php');

        break;

    case "admin_group":

        $group = $_POST['group'];
        $users = $_POST['users'];

        foreach($users as $k=>$v){
            $sql = "select * from groups where user_id='{$v}' and group_name = '{$group}'";
            $select_group =  sql_select($sql);
            if(!isset($select_group[0]['group_name'])){
                $sql = "insert into groups (group_name,user_id) values ('{$group}','{$v}')";
                sql_exec($sql);
            }
        }
        header('Location:admin_group.php');
        break;

    case "remove_group":
        $group = $_GET['group'];
        $user_id =$_GET['user_id'];
        $sql = "delete from groups where group_name='{$group}' and user_id='{$user_id}'";
        sql_exec($sql);
        header('Location:admin_group.php');
        break;
}