<?php

require_once('../MysqliDb.php');
$db = new MysqliDb ('localhost', 'homestead', 'secret', 'fsnhs');
include('session.php');
if (!empty($_GET['s'])) {

    $data = Array(
        'approved' => ($_GET['d']==1)? false:true,
        'updated_at' => $db->now(),
        'updated_by' => $_SESSION['login_id']
    );

//    var_dump($data); exit();

    $id = $db->where('id', $_GET['s']);
    if ($id->update('users', $data))
        echo $id->count . ' records were updated';
    else
        echo 'update failed: ' . $id->getLastError();
//    $id->update('users', $data);

    header("location: /admin/users_approvals.php");
}

?>