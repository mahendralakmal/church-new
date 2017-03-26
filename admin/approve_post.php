<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once('../MysqliDb.php');
$db = new MysqliDb ();
include('session.php');
if (!empty($_GET['s'])) {
    $data = Array(
        'approved' => ($_GET['d']==1)? false:true,
        'updated_at' => $db->now(),
        'updated_by' => $_SESSION['login_id']
    );

    $id = $db->where('id', $_GET['s']);
    echo ($id->update('posts', $data))?'':'update failed: ' . $id->getLastError();

    header("location: /admin/post.php");
}

?>