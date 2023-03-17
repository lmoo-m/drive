<?php
require "./connection.php";
require "./helper.php";

$id = $_SESSION['id_user'];

$data = mysqli_query($db, "select * from files where id_user = '$id'");

if ($_SESSION['id_user'] == null) {
    header("location:?page=login");
}
?>

<div class="dashboard">
    <div>
        <h4>hello <?php echo $_SESSION['username'] ?></h4>
        <p>my file</p>
        <div class="container">
            <?php
            while ($res = mysqli_fetch_array($data)) {
            ?>
                <div class="card">
                    <div class="img" class="img" style="display: flex; justify-content: center; align-items: center;">
                        <p><?php echo $res['files'] ?></p>
                    </div>
                    <div class="desc">
                        <h5>
                            <?php echo $res['title'] ?>
                        </h5>
                        <div style="margin-top: 10px;">
                            <a href="<?php echo $base_url ?>?page=download&id=<?php echo $res['id'] ?>">
                                <i data-feather="download"></i>
                            </a>
                            <a href="<?php echo $base_url ?>?page=delete&id=<?php echo $res['id'] ?>">
                                <i data-feather="trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>