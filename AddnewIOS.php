<?php 
require 'MysqliConnection.php';
if(isset($_POST['btn-reg']))
{
    $namephone=$_POST['tenmay'];
    $cauhinh=$_POST['cauhinh'];
    $trangthai=$_POST['trangthai'];
    $soluong=$_POST['soluong'];
    if(!empty($namephone)&&!empty($cauhinh)&&!empty($trangthai)&&!empty($soluong))
    {
        $sql = "INSERT INTO `quanlykhochdt1` (`TenMay`,`CauHinh`,`TrangThai`,`SoLuong`)
        VALUES( '$namephone','$cauhinh', '$trangthai', '$soluong')";
        if($conn->query($sql)===TRUE)
        {
            header('Location: http://localhost/code/messenger2.php');
        }else
        {
            header('Location: http://localhost/code/messenger1.php');
        }
    }else
    {
        echo "Bạn cần nhập đầy đú thông tin trước khi thêm!";
    }
}
?>
