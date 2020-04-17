<?php
include_once("config.php");
session_start();
check_login();
//check_admin();
$admin = check_module_admin('fix');

$action = $_REQUEST['action'];

switch ($action) {
    case 'fix_store':
        $user_id = $_POST['user_id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $created_at = date('y-m-d H:i:s');
        $updated_at = date('y-m-d H:i:s');

        $sql = "insert into fixes (title,content,user_id,situation,created_at,updated_at) values('{$title}','{$content}','{$user_id}','3','{$created_at}','{$updated_at}')";
        sql_exec($sql);

        header('Location:fix.php');
        die();

        break;

    case 'fix_destroy':
        $id = $_GET['id'];
        $sql = "select * from fixes where id='{$id}'";
        $fix = sql_select($sql);
        if($fix[0]['user_id'] == $_SESSION['user']['id'] or $admin){
            $sql = "delete from fixes where id='{$id}'";
            sql_exec($sql);
        }
        header('Location:fix.php');
        die();
        break;

    case "fix_admin":
        if($admin){
            $id = $_POST['id'];
            $situation = $_POST['situation'];
            $reply = $_POST['reply'];
            $sql = "update fixes set situation='{$situation}',reply='{$reply}' where id='{$id}'";
            sql_exec($sql);
        }

        header('Location:fix.php');
        die();
        break;

}