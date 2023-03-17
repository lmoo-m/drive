<?php
require "./connection.php";
require "./helper.php";

$data = mysqli_query($db, "select files.*, users.* from files inner join users on files.id_user = users.id_user");

if ($_SESSION['id_user'] == null) {
    header("location:?page=login");
}
?>

<div class="dashboard">
    <div>
        <h4>hello <?php echo $_SESSION['username'] ?></h4>
        <p>sharing</p>
        <div class="container">
            <?php
            while ($res = mysqli_fetch_array($data)) {
            ?>
                <div class="card">
                    <div class="img" style="display: flex; justify-content: center; align-items: center;">
                        <p><?php echo $res['files'] ?></p>
                    </div>
                    <div class="desc">
                        <h5>
                            <?php echo $res['title'] ?>
                        </h5>
                        <div style="display: flex; justify-content: space-between; padding: 0 0.5rem;">
                            <p>from: <?php echo $res['username'] ?></p>
                            <a href="<?php echo $base_url ?>?page=download&id=<?php echo $res['id'] ?>">
                                <i data-feather="download"></i>
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