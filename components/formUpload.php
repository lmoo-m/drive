<?php
require "./helper.php";
require "./connection.php";

$page = isset($_GET['page']) ? ($_GET['page']) : false;

$id = $_SESSION['id_user'];

if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $file = $_FILES['file']['name'];
    $tmp_files = $_FILES["file"]["tmp_name"];


    $p = pathinfo($file, PATHINFO_FILENAME);
    $a = pathinfo($file, PATHINFO_EXTENSION);
    $filename = $p . date("ymdhms") . "." . $a;

    move_uploaded_file($tmp_files, "./public/" . $filename);
    mysqli_query($db, "insert into files (id_user, files, title) values ('$id', '$filename', '$title')");
    header("location:?page=" . $page);
}
?>

<div class="upload">
    <form method="post" action="" enctype="multipart/form-data">
        <a href="<?php echo $base_url ?>?page=<?php echo $page ?>&upload=false">
            <span>
                <i data-feather="x"></i>
            </span>
        </a>
        <input type="file" name="file" required />
        <input name="title" required placeholder="title" />
        <button class="btn btn-primary" name="upload">Upload</button>
    </form>
</div>