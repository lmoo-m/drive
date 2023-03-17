<?php
require "./connection.php";

$id = $_SESSION['id_user'];

$data = mysqli_query($db, "select * from users where id_user = '$id'");

$user = mysqli_fetch_array($data);

if ($_SESSION['id_user'] == null) {
    header("location:?page=login");
}
?>

<div class="login-page">
    <div class="form">
        <h4>
            Profile
        </h4>
        <form method="post" action="" style="margin-top: 10px;">
            <label style="color: white;">Username:</label>
            <input name="username" class="input" placeholder="username..." value="<?php echo $user['username'] ?>" disabled />
            <div>
                <!-- <button class="btn btn-primary" name="login">Edit</button> -->
                <a class="btn btn-secondary" href="<?php echo $base_url ?>?page=logout">Logout</a>
            </div>
        </form>
    </div>
</div>