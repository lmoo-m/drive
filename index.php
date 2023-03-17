<?php
$page = isset($_GET['page']) ? ($_GET['page']) : false;
$upload = isset($_GET['upload']) ? ($_GET['upload']) : false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link rel="stylesheet" href="./new.css" type="text/css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Document</title>
</head>

<body>
    <?php require_once "./components/navbar.php" ?>

    <div>
        <?php
        if (!$page) {
        ?>
            <h3>index</h3>
        <?php
        } else {
            require_once "./pages/" . $page . ".php";
        }
        ?>
    </div>

    <?php
    if ($upload == "true") {
        require_once "./components/formUpload.php";
    }
    ?>

    <?php
    if (isset($_SESSION['id_user']) != null) {
        require_once "./components/upload.php";
    }
    ?>
    <script>
        feather.replace()
    </script>
</body>

</html>