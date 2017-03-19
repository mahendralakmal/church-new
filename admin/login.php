<!DOCTYPE html>
<html lang="en">
<?php
require_once('../MysqliDb.php');
$db = new MysqliDb ('localhost', 'homestead', 'secret', 'fsnhs');
session_start();
$error = '';
if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $myusername = $_POST['email'];
    $mypassword = $_POST['password'];

    $user = $db->where('email',$myusername)->getOne('users');

    if(md5($mypassword) === $user['password']){
        $_SESSION['login_user'] = $myusername;
        header("location: index.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}


require_once('./head.php'); ?>
<body>
<?php
require_once('./menu.php');
?>
<div class="row admin-nav">
    <?php if($error != ''){echo '<div class="mdi-alert-error col m12">'.$error.'</div>';}?>
    <div class="col m4 offset-m4 login">
        <h4>Sign in</h4>
        <form action="login.php" name="login" id="login" method="post">
            <fieldset>
                <div class="row">
                    <div class="col s12">
                        <div class="input-field inline">
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="input-field inline">
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password" data-error="wrong" data-success="right">Password</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn" id="submit" name="submit">Sign in</button>
            </fieldset>
        </form>
    </div>
</div>
<?php require_once('./footer.php'); ?>
</body>
</html>