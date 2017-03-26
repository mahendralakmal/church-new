<?php

$user_check = $_SESSION['login_user'];

$user = $db->where('email',$user_check)->getOne('users');

$login_session = $user['email'];
$login_user = $user['name'];

if(!isset($_SESSION['login_user'])){
    if (headers_sent()){
        echo("<script>location.href = 'login.php';</script>");
    }else{
//        print_r('JJJJ'); exit();
        header("location:login.php");
    }
}
?>