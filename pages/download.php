<?php
require "./connection.php";

if ($_SESSION['id_user'] == null) {
    header("location:?page=login");
}

$id = isset($_GET['id']) ? ($_GET['id']) : false;

$data = mysqli_fetch_array(mysqli_query($db, "select * from files where id = '$id'"));

// nama file yang ingin diunduh
$file = $data['files'];

// lokasi file
$path = './public/' . $file;

// header HTTP
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $file . '"');
header('Content-Length: ' . filesize($path));

// membaca file dan mengirim isinya ke browser
readfile($path);
