<?php
    switch ($action){
        case "update":
        case "insert":
            include $RootPath."/UpdateIOS.php";
            break;
        default:
        include $RootPath."/ShowIOS.php";
    }
?>
