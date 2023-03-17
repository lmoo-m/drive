<?php
require "./helper.php";
require "./connection.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $login = mysqli_query($db, "select * from users where username = '$username' and password = '$password'");
    $user = mysqli_fetch_array($login);
    if (mysqli_num_rows($login) != 0) {
        session_start();
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['username'] = $user['username'];
        header("location:?page=dashboard");
    } else {
        header("location:?page=login");
    }
}
?>

<div class="login-page">
    <div class="form">
        <h4>
            login
        </h4>
        <form method="post" action="">
            <input name="username" class="input" placeholder="username..." />
            <input name="password" type="password" class="input" placeholder="password..." />
            <div>
                <button class="btn btn-primary" name="login">Login</button>
                <a class="btn btn-secondary" href="<?php echo $base_url ?>?page=register">Register</a>
            </div>
        </form>
    </div>
</div>