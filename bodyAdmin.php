<?php
    switch ($action) {
        case "update":
        case "insert":
            include $RootPath . "/UpdateAdmin.php";
            break;
        default:
        include $RootPath . "/ShowAdmin.php";
}
?>
