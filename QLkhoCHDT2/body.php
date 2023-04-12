<div class="row">
    <div class="col-md-12">
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
    </div>
</div>
