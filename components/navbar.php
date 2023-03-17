<?php
require "./helper.php";

session_start();
$id = isset($_SESSION['id_user']);
?>

<nav>
    <a href="<?php echo $base_url ?>?page=dashboard">
        <h3>Sharing</h3>
    </a>
    <div>
        <?php
        if ($id != null) {
        ?>
            <a href="<?php echo $base_url ?>?page=myfile">My File</a>
            <a href="<?php echo $base_url ?>?page=profile">Profile</a>
        <?php
        } else {
        ?>
            <a href="<?php echo $base_url ?>?page=login">Login</a>
            <a href="<?php echo $base_url ?>?page=register">Register</a>
        <?php
        }
        ?>
    </div>
</nav>