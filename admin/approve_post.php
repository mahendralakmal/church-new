<?php

require_once('../MysqliDb.php');
$db = new MysqliDb ('localhost', 'homestead', 'secret', 'fsnhs');
session_start();
include('session.php');
if (!empty($_GET['s'])) {
    $data = Array(
        'approved' => ($_GET['d']==1)? false:true,
        'updated_at' => $db->now(),
        'updated_by' => $_SESSION['login_id']
    );

    $id = $db->where('id', $_GET['s']);
    if ($id->update('posts', $data))
        echo $id->count . ' records were updated';
    else
        echo 'update failed: ' . $id->getLastError();

    header("location: /admin/post.php");
}

?>