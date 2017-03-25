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

//print_r(json_encode($_POST));
if (isset($_POST['submit'])) {
    $uploaddir = '/images/gallery/';
    $uploadfile = $uploaddir . basename($_FILES['featured_image']['name']);

    if (move_uploaded_file($_FILES['featured_image']['tmp_name'], '..' . $uploadfile)) {
    }


    if (!empty($_POST['title']) && !empty($_POST['description'])) {

        $data = Array(
            'title' => $_POST['title'],
            'description' => nl2br($_POST['description']),
            'featured' => ($_POST['featured'] == 'on') ? true : false,
            'featured_image' => $uploadfile,
            'created_at' => $db->now(),
            'created_by' => $_SESSION['login_id']
        );

        $id = $db->insert('posts', $data);
        response($id, $db);

    }
}
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
            <div class="col m7">
                <table>
                    <thead>
                    <tr>
                        <th data-field="id">Id</th>
                        <th data-field="name">Title</th>
                        <th data-field="name">Approval</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    $posts = $db->get('posts');
                    foreach ($posts as $post) {
                        echo '<tr><td><a href="approval_post.php?s='.$post['id'].'&d=1">' . $post['id'] . '</a></td><td><a href="approval_post.php?s='.$post['id'].'&d=1">' . $post['title'] . '</a></td><td>';
                        echo ($post['approved']) ? '<i class="material-icons green-text ">thumb_up</i>' : '<i class="material-icons red-text">thumb_down</i></td></tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="col m5">
                <form method="post" action="post.php" name="frm_posts" id="frm_posts" enctype="multipart/form-data">
                    <fieldset>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field inline">
                                    <input placeholder="Title" name="title" id="title" type="text"
                                           class="validate">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="input-field inline">
                                    <pre><textarea placeholder="Description" name="description"
                                                   id="description"
                                                   class="validate materialize-textarea"></textarea></pre>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m4">
                                <input id="featured" name="featured" type="checkbox">
                                <label for="featured">Featured</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="featured_image"
                                           id="featured_image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                    <span>allows only .jpg, .png and .gif</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <input type="hidden" id="user_id" name="user_id"
                                       value="<?php echo $_SESSION['login_id']; ?>">

                                <button type="submit" class="waves-effect waves-light btn" id="submit" name="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once('./footer.php'); ?>
</body>
</html>