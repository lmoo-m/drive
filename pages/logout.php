<?php
unset($_SESSION['username']);
unset($_SESSION['id_user']);
header("location:?page=login");
