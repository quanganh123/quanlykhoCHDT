<?php
$AdminId=null;
$Admin = null;
if(isset($_GET['Id']))
    $AdminId=$_GET['Id'];
if($action=="update") {
    $sql = "Select * FROM quanlykhochdt where Id=" . $AdminId;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Admin = $row;
        }
    }
}else{
    $Admin=array(
        "Id"=>"",
        "HoVaTen"=>"",
        "MaAdmin"=>"",
        "VaiTro"=>"",
        "User_name"=>"",
        "Password"=>"",
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="fromthem.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="login-page">
        <div class="form">
            <form class="login-form" action="indexAdmin.php?action=post_update" method="post">
                <h4>Sửa Danh Sách Admin</h4>
                <input type="text" id="HoVaTen" name="HoVaTen" placeholder="Họ Và Tên" required>
                <input type="text" id="MaAdmin" name="MaAdmin" placeholder="Mã Admin" required>
                <input type="text" id="User_name" name="User_name" placeholder="Tài Khoản" required>
                <input type="password" id="Password" name="Password" placeholder="Mật Khẩu" required>
                <button type="submit" name="btn-reg">Sửa</button>
                <input type="hidden" name="Id" value="<?php echo $Admin["Id"] ?>">
            </form>
        </div>
    </div>
</body>
</html>
