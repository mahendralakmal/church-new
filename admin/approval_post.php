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

$id = intval($_GET['s']);
$post = $db->where('id', $id)->getOne('posts');

?>
<div class="row admin">
    <?php require_once('./side-nav.php'); ?>
    <div class="admin-container col m9">
        <?php
        function response($id, $db)
        {
            if ($id)
                echo '<div class="mdi-alert-success col m12"> user was created. Id=' . $id . '</div>';
            else
                echo '<div class="mdi-alert-error col m12"> insert failed: ' . $db->getLastError() . '</div>';
        }

        ?>
        <div class="row">
            <h1><?php echo $post['title'] ?></h1>
            <div class="row">
                <div class="col s12 m12 ">
                    <?php if (isset($post['featured_image'])){ ?>
                    <div class="col s12 m4">
                        <img src="<?php echo $post['featured_image'] ?>" alt="<?php echo $post['featured_image'] ?>"
                             class="responsive-img" style="max-height: 450px"></div>
                    <div class="col s12 m8" style="max-height: 450px; overflow: auto">
                        <?php } else { ?>
                        <div class="col s12 m12" style="max-height: 450px; overflow: auto">
                            <?php }
                            echo $post['description'] ?>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12">
                    <p>Approval : <?php
                        echo ($post['approved']) ? '<a href="approve_post.php?s=' . $post['id'] . '&d=1"><i class="material-icons green-text ">thumb_up</i></a>' : '<a href="approve_post.php?s=' . $post['id'] . '&d=0"><i class="material-icons red-text">thumb_down</i></a>';
                        ?></p>
                </div>
                <div class="col s12 m12 row">
                    <?php
                    $gallery = $db->where('posts_id', $id)->get('galleries');
                    foreach ($gallery as $value)
                    {
                        ?>
                        <div class="col m3 thumb">
                            <div class="col m12 gallery">
                                <img class="" src="<?php echo($value['images']) ?>" alt="<?php echo($value['images']) ?>">
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('./footer.php'); ?>
</body>
</html>