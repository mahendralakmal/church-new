<!DOCTYPE html>
<html lang="en">
<?php require_once('./head.php'); ?>
<body>
<?php
require_once('./menu.php');
require_once('MysqliDb.php');
$db = new MysqliDb ();

$id = intval($_GET['news']);
$post = $db->where('id', $id)->getOne('posts');


?>
<div class="container news">
    <h1><?php echo $post['title'] ?></h1>
    <div class="row">
        <?php if (isset($post['featured_image'])){ ?>
        <div class="col s12 m4">
            <img src="<?php echo $post['featured_image'] ?>" alt="<?php echo $post['featured_image'] ?>"
                 class="responsive-img" style="max-height: 450px"></div>
        <div class="col s12 m8">
            <?php } else { ?>
            <div class="col s12 m12 mdi-editor-format-align-justify">
                <?php }
                echo $post['description'] ?>
            </div>
        </div>
        <div class="col s12 m12 row">
            <?php
            $gallery = $db->where('posts_id', $id)->get('galleries');
            foreach ($gallery as $value) {
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

    <?php
    require_once('./footer.php');

    ?>
</body>
</html>
