<?php
require "./connection.php";

if ($_SESSION['id_user'] == null) {
    header("location:?page=login");
}

$id = isset($_GET['id']) ? ($_GET['id']) : false;

mysqli_query($db, "delete from files where id = '$id'");
header("location:?page=myfile");
