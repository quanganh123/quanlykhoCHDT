<!doctype html>
<?php
$RootPath=__DIR__;
require_once "MysqliConnection.php";
$action="";
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
switch ($action){
    case "post_update":
        UpdateData($conn);
        break;
    case "delete":
        DeleteData($conn);
    default:
        break;
}

function UpdateData($conn)
{
    $Id=$_POST['Id'];
    $HoVaTen=$_POST['HoVaTen'];
    $MaAdmin=$_POST['MaAdmin'];
    $user_name=$_POST['User_name'];
    $password=$_POST['Password'];
    $sql="Update quanlykhochdt set HoVaTen='$HoVaTen',MaAdmin='$MaAdmin', user_name='$user_name', password='$password' WHERE Id=".$Id;
    $conn->query($sql);
}
function DeleteData($conn){
    $Id=$_GET['Id'];
    $sql="Delete From quanlykhochdt WHERE Id=".$Id;
    $conn->query($sql);
}
require_once "ListAdmin.php";

?>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Quản Lý Kho Cưa Hàng Điện Thoại</title>
</head>
<body>
    <?php include "./bodyAdmin.php"?>
</body>
</html>
<?php
$conn->close();
?>