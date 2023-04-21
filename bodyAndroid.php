<?php
    switch ($action){
        case "update":
        case "insert":
            include $RootPath."/UpdateANDROID.php";
            break;
        default:
            include $RootPath."/ShowANDROID.php";
    }
?>
