<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="indexmenu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Quản Lý Kho Cửa Hàng Điện Thoại</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="/code/Treckdangnhap.php" method="post">
                <h4>Đăng Nhập</h4>
                <input type="text" id="user_name" name="user_name" placeholder="Tài Khoản" required>
                <input type="password" id="password" name="password" placeholder="Mật Khẩu" required>
                <button type="submit" name="btn-reg">Đăng Nhập</button>
                <p class="message">Bạn Chưa Có Tài Khoản??<a href="/code/dangky.php"> Tạo Tài Khoản</a></p>
            </form>
        </div>
    </div>
</body>

</html>