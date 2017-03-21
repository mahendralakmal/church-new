<nav class="navbar-fixed red" role="navigation">
    <div class="nav-wrapper container-fluid">
        <a id="logo-container" href="#" class="brand-logo">Mattumagala Sacred Heart Parish</a>
        <ul class="right hide-on-med-and-down">
            <?php if (isset($login_user)) {
                echo '<li>Welcome...! ' . $login_user . '</li>
      <li><a href="logout.php">Sign Out</a></li>
      ';
            } ?>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
</nav>