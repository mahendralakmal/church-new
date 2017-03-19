<?php
//require_once('../MysqliDb.php');
//$db = new MysqliDb ('localhost', 'homestead', 'secret', 'fsnhs');
session_start();

$user_check = $_SESSION['login_user'];

$user = $db->where('email',$user_check)->getOne('users');

$login_session = $user['email'];
$login_user = $user['name'];

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}
?>