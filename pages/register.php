<?php
require "./helper.php";
require "./connection.php";

$err = "";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $konfpassword = md5($_POST['konfpassword']);

    if ($password === $konfpassword) {
        mysqli_query($db, "insert into users (username, password) values ('$username', '$password')");
        header("location:?page=login");
    } else {
        $err = "konfirmasi password salah";
    }
}
?>

<div class="login-page">
    <div class="form">
        <?php
        if ($err) {
        ?>
            <p><?php echo $err ?></p>
        <?php
        }
        ?>
        <h4>
            register
        </h4>
        <form method="post" action="">
            <input name="username" required class="input" placeholder="username..." />
            <input name="password" type="password" class="input" placeholder="password..." />
            <input name="konfpassword" type="password" class="input" placeholder="konfirm password..." />
            <div>
                <button class="btn btn-primary" name="register">Register</button>
                <a class="btn btn-secondary" href="<?php echo $base_url ?>?page=login">Login</a>
            </div>
        </form>
    </div>
</div>