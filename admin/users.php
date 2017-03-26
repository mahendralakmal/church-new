<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once('../MysqliDb.php');
$db = new MysqliDb ();
include('session.php');
require_once('./head.php');
?>
<body>
<?php
require_once('./menu.php');


if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $data = Array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => md5($_POST['password']),
        'created_at' => $db->now()
    );

    $id = $db->insert('users', $data);
    response($id, $db);
}

?>
<div class="row admin">
    <?php require_once('./side-nav.php'); ?>
    <div class="admin-container col m9">
        <?php
        function response($id,$db){
            if ($id)
                echo '<div class="mdi-alert-success col m12"> user was created. Id=' . $id . '</div>';
            else
                echo '<div class="mdi-alert-error col m12"> insert failed: ' . $db->getLastError() . '</div>';
        }
        ?>
        <div class="row">
            <div class="col m7">
                <table>
                    <thead>
                    <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">email</th>
                        <th data-field="price">Approved</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    $users = $db->get('users');
                    foreach ($users as $user) {
                        if ($user['id'] != 1) {
                            echo '<tr><td>' . $user['name'] . '</td><td>' . $user['email'] . '</td><td>.';
                            echo ($user['approved']) ? '<i class="material-icons green-text ">thumb_up</i>' : '<i class="material-icons red-text">thumb_down</i></td></tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col m5">
                <form method="post" action="users.php" name="registerform" id="registerform">
                    <fieldset>
                        <div class="row">
                            <div class="input-field">
                                <input placeholder="Placeholder" name="name" id="name" type="text" class="validate">
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field inline">
                                    <input name="email" id="email" type="email" class="validate">
                                    <label for="email" data-error="wrong" data-success="right">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password_again" name="password_again" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['login_id']; ?>">

                        <button type="submit" class="waves-effect waves-light btn" id="submit" name="submit">Submit
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once('./footer.php'); ?>
</body>
</html>