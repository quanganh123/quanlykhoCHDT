<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="fromthem.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Quản Lý Kho Cửa Hàng Điện Thoại</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="/code/AddnewAndroid.php" method="post">
                <h4>Thêm Mới Điện Thoại Android</h4>
                <input type="text" id="tenmay" name="tenmay" placeholder="Tên Máy" required>
                <input type="text" id="cauhinh" name="cauhinh" placeholder="Cấu Hình" required>
                <input type="text" id="trangthai" name="trangthai" placeholder="Trạng Thái" required>
                <input type="text" id="soluong" name="soluong" placeholder="Số Lượng" required>
                <button type="submit" name="btn-reg">Thêm Mới</button>
            </form>
        </div>
    </div>
</body>

</html>