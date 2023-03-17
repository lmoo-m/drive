<?php
require "./helper.php";

$page = isset($_GET['page']) ? ($_GET['page']) : false;
?>

<div class="tool">
    <a href="<?php echo $base_url ?>?page=<?php echo $page ?>&upload=true" style="display: flex; justify-content: center; align-items: center;">
        <span>
            <i data-feather="folder-plus" color="white" stroke-width="2px"></i>
        </span>
    </a>
</div>