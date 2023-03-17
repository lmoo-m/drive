<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "sharing";

$db = mysqli_connect($host, $user, $password, $dbname);

if (!$db) {
    die();
}
