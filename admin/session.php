<?php
//session_start();
//require_once('../MysqliDb.php');
//$db = new MysqliDb ('localhost', 'homestead', 'secret', 'fsnhs');

$user_check = $_SESSION['login_user'];

$user = $db->where('email',$user_check)->getOne('users');

$login_session = $user['email'];
$login_user = $user['name'];

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}
?>