<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="indexmenu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bai1/assets/css/bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <title>Quản Lý Kho Cửa Hàng Điện Thoại</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="/code/AddnewAdmin.php" method="post">
                <h4>Đăng Ký</h4>
                <input type="text" id="fullname" name="fullname" placeholder="Họ Và Tên" required>
                <input type="text" id="idadmin" name="idadmin" placeholder="Mã Admin" required>
                <input type="text" id="user_name" name="user_name" placeholder="Tài Khoản" required>
                <input type="password" id="password" name="password" placeholder="Mật Khẩu" required>
                <button type="submit" name="btn-reg">Đăng Ký</button>
                <p class="message">Bạn Đã Có Tài Khoản?<a href="/code/index.php"> Đăng Nhập</a></p>
            </form>
        </div>
    </div>
</body>

</html>