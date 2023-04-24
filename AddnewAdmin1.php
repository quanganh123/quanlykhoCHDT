<?php 
require 'MysqliConnection.php';
if(isset($_POST['btn-reg']))
{
    $fullname=$_POST['fullname'];
    $idadmin=$_POST['idadmin'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    if(!empty($fullname)&&!empty($idadmin)&&!empty($user_name)&&!empty($password))
    {
        $sql = "INSERT INTO `quanlykhochdt` (`HoVaTen`,`MaAdmin`,`User_name`,`Password`)
        VALUES('$fullname', '$idadmin', '$user_name', '$password')";
        if($conn->query($sql)===TRUE)
        {
            header('Location: http://localhost/code/messenger2.php');
        }else
        {
            header('Location: http://localhost/code/messenger1.php');
        }
    }
    else
    {
        echo "Bạn cần nhập đầy đú thông tin trước khi thêm!";
    }
}
?>
