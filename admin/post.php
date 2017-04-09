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

//        var_dump($data);
        $id = $db->insert('posts', $data);
//        var_dump($id);
        foreach ($_FILES['galary_images']['name'] as $key => $value) {

            $tmp_name = $id .'-'. $_FILES["galary_images"]["tmp_name"][$key];
            $name = $uploaddir . basename($id .'-'. $_FILES["galary_images"]["name"][$key]);

            move_uploaded_file($tmp_name, '..' . $name);

            $img = Array(
                'posts_id' => $id,
                'images' => $name,
                'created_at' => $db->now(),
                'created_by' => $_SESSION['login_id']
            );

//            var_dump($img);

            $c = $db->insert('galleries', $img);
//            var_dump($c);
//            exit();
        }


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
                        echo '<tr><td><a href="approval_post.php?s=' . $post['id'] . '&d=1">' . $post['id'] . '</a></td><td><a href="approval_post.php?s=' . $post['id'] . '&d=1">' . $post['title'] . '</a></td><td>';
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
                                    <input placeholder="Featured Image (allows only .jpg, .png and .gif)"
                                           class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="galary_images[]" id="galary_images" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text"
                                           placeholder="Upload one or more files">
                                </div>
                            </div>
                        </div>
                        <div class="input_fields_wrap row"></div>

                        <!--                        <div class="row">-->
                        <!--                            <div class=""><a class="add_more" href="#"><i class="material-icons"-->
                        <!--                                                                                 style="margin-top: 28px; color: #26a69a;">add</i>-->
                        <!--                                    Add more images</a></div>-->
                        <!--                        </div>-->
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
<script type="application/javascript">
    //    $(document).ready(function() {
    //        var max_fields      = 10; //maximum input boxes allowed
    //        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    //        var add_button      = $(".add_more"); //Add button ID
    //
    //        var x = 1; //initlal text box count
    //        $(add_button).click(function(e){ //on add input button click
    //            e.preventDefault();
    ////            if(x < max_fields){ //max input box allowed
    //                x++; //text box increment
    //                $(wrapper).append('<div><div class="file-field input-field col s11"><div class="btn"><span>File</span><input type="file" name="featured_image[]" id="featured_image"></div><div class="file-path-wrapper"><input placeholder="Images for gallary (allows only .jpg, .png and .gif)" class="file-path validate" type="text"></div></div><a href="#" class="remove_field col s1"><i class="material-icons">delete</i></a></div></div>'); //add input box
    ////            }
    //        });
    //
    //        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    //            e.preventDefault(); $(this).parent('div').remove(); x--;
    //        })
    //    });

</script>
</body>
</html>