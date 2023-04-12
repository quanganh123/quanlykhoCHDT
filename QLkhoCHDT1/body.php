<div class="row">
    <div class="col-md-12">
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
    </div>
</div>
