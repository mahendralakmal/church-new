<!DOCTYPE html>
<html lang="en">
<?php require_once('./head.php'); ?>
<body>
<?php require_once('./menu.php'); ?>
<div class="row admin">
    <div class="admin-nav">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><a href="#" class="collection-item">Users</a></div>
                <div class="collapsible-body">
                    <ul class="collection">
                        <li class="collection-item"><a href="/admin/locations/districts" class="collection-item">Add New User</a></li>
                        <li class="collection-item"><a href="/admin/locations/cities" class="collection-item">Approval</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><a href="#" class="collection-item">Posts</a></div>
                <div class="collapsible-body">
                    <ul class="collection">
                        <li class="collection-item"><a href="/admin/locations/districts" class="collection-item">Add Post</a></li>
                        <li class="collection-item"><a href="/admin/locations/cities" class="collection-item">Approval</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="admin-container col m9">

    </div>
</div>
<?php require_once('./footer.php'); ?>
</body>
</html>