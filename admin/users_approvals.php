<!DOCTYPE html>
<html lang="en">
<?php require_once('./head.php'); ?>
<body>
<?php
require_once('./menu.php');

require_once('../MysqliDb.php');
$db = new MysqliDb ();

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $data = Array(
        'approved' => $_POST['approved'],
        'updated_at' => $db->now(),
        'updated_by' => $_POST['user_id']
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
                        <th data-field="price"></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    $users = $db->get('users');
                    foreach ($users as $user) {
                        if ($user['id'] != 1) {
                            echo '<tr><td>' . $user['name'] . '</td>
                            <td>' . $user['email'] . '</td><td>';
                            echo ($user['approved']) ? '<a href="users_approve.php?s='.$user['id'].'&d=1"><i class="material-icons green-text ">thumb_up</i></a>' : '<a href="users_approve.php?s='.$user['id'].'&d=0"><i class="material-icons red-text">thumb_down</i></a></td></tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require_once('./footer.php'); ?>
</body>
</html>