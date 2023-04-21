<?php
$AndroidId=null;
$Android = null;
if(isset($_GET['Id']))
    $AndroidId=$_GET['Id'];
if($action=="update") {
    $sql = "Select * FROM quanlykhochdt2 where Id=" . $AndroidId;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Android = $row;
        }
    }
}else{
    $Android=array(
        "Id"=>"",
        "TenMay"=>"",
        "CauHinh"=>"",
        "TrangThai"=>"",
        "SoLuong"=>"",
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
            <form class="login-form" action="indexAndroid.php?action=post_update" method="post">
                <h4>Sửa Sản Phẩm Điện Thoại Android</h4>
                <input type="text" id="TenMay" name="TenMay" placeholder="Tên Máy" required>
                <input type="text" id="CauHinh" name="CauHinh" placeholder="Cấu Hình" required>
                <input type="text" id="TrangThai" name="TrangThai" placeholder="Trạng Thái" required>
                <input type="text" id="SoLuong" name="SoLuong" placeholder="Số Lượng" required>
                <button type="submit" name="btn-reg">Sửa</button>
                <input type="hidden" name="Id" value="<?php echo $Android["Id"] ?>">
            </form>
        </div>
    </div>
</body>
</html>