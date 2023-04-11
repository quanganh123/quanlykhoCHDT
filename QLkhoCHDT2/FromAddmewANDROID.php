<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bai1/assets/css/bootstrap-4.6.2-dist/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <title>Quản Lý Kho Cửa Hàng Điện Thoại</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="offset-3 col-6">
            <form id="from_reg" class="bg-light p-4 my-3" action="AddnewAndroid.php" method="post">
            <h3 class="text-center">Thêm Mới Điện Thoại Android</h2>
            <div class="form-group">
                    <label for="TenMay">Tên Máy</label>
                    <input type="text" name="tenmay" class="form-control" id="TenMay">
                </div>
                <div class="form-group">
                    <label for="Cấu Hình">Cấu Hình </label>
                    <input type="text" name="cauhinh" class="form-control" id="CauHinh">
                </div>
                <div class="form-group">
                    <label for="TrangThai">Trạng Thái</label>
                    <input type="text" name="trangthai" class="form-control" id="TrangThai">
                </div>
                <div class="form-group">
                    <label for="SoLuong">Số Lượng</label>
                    <input type="text" name="soluong" class="form-control" id="SoLuong">
                </div>
                <input type="submit" class="btn btn-outline-primary btn-block mt-4 offset-3 col-6" name="btn-reg" value="Thêm Vào">
            </form>
            </div>
        </div>
    </div>
</body>
</html>