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
    $namephone=$_POST['TenMay'];
    $cauhinh=$_POST['CauHinh'];
    $trangthai=$_POST['TrangThai'];
    $soluong=$_POST['SoLuong'];
    $sql="Update quanlykhochdt2 set TenMay='$namephone', CauHinh='$cauhinh', TrangThai='$trangthai', SoLuong='$soluong' WHERE Id=".$Id;
    $conn->query($sql);
}
function DeleteData($conn){
    $Id=$_GET['Id'];
    $sql="Delete From quanlykhochdt2 WHERE Id=".$Id;
    $conn->query($sql);
}
require_once "ListANDROID.php";

?>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Quản Lý Kho Cửa Hàng Điện Thoại</title>
</head>
<body>
    <?php include "./bodyAndroid.php"?>
</body>
</html>
<?php
$conn->close();
?>