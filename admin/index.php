<!DOCTYPE html>
<html lang="en">

<?php
require_once('../MysqliDb.php');
$db = new MysqliDb ('localhost', 'homestead', 'secret', 'fsnhs');
session_start();
include('session.php');
require_once('./head.php');
?>
<body>
<?php
require_once('./menu.php');
?>

<div class="row admin">
    <?php require_once('./side-nav.php'); ?>
    <div class="admin-container col m9">

    </div>
</div>
<?php require_once('./footer.php'); ?>
</body>
</html>