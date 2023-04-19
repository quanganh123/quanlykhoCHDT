<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 0.1">
    <link rel="stylesheet" href="QLkhoCHDT2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Quản Lý Kho Cửa Hàng Điện Thoại</title>
</head>

<body>
<div class="row">
        <div class="col-sm-12">
            <div class="menu">
                <ul class="nav nav-pills">
                    <div>
                        <input type="checkbox" id="ham-menu">
                        <label for="ham-menu">
                            <div class="hide-des">
                                <span class="menu-line"></span>
                                <span class="menu-line"></span>
                                <span class="menu-line"></span>
                                <span class="menu-line"></span>
                                <span class="menu-line"></span>
                                <span class="menu-line"></span>
                            </div>
                        </label>
                        <div class="full-page-green"></div>
                        <div class="ham-menu">
                            <ul class="centre-text bold-text">
                                <li><a href="http://localhost/code/QLkhoCHDT">Quản Lý Admin</a></li>
                                <li><a href="http://localhost/code/QLkhoCHDT1">Quản Điện Thoại Ios</a></li>
                                <li><a href="http://localhost/code/QLkhoCHDT2">Quản Lý Điện Thoại Android</a></li>
                            </ul>
                        </div>
                    </div>
                    <li class="col"></li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">Quản Lý Kho Cửa Hàng Điện Thoại</a>
                    </li>
                    <li class="col-sm-4"></li>
                    <li class="nav-item nav-link">
                        <a class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn thoát!');" href="/code/index.php">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="color_left col-sm-1 text-center text-danger"></div>
        <div class="container">
            <div class="text-center text-danger pt-5 my-4">
                <h4>Quản Lý Kho Cửa Hàng Điện Thoại</h4>
            </div>
            <div class="input-group mb-3 col-sm-3">
                <input type="text" class="form-control" id="myInput" placeholder="Search">
            </div>
            <table class="table table-striped table-hover table-sm text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tên Máy</th>
                        <th>Cấu Hình</th>
                        <th>Trạng Thái</th>
                        <th>Giá Máy</th>
                        <th></th>
                        <th><a class="btn btn-outline-success" href="FromAddmewAndroid.php">Thêm mới</a></th>
                    </tr>
                </thead>
                <tbody class="myTable">
                    <?php foreach ($ListAndroid as $Android) { ?>
                        <tr>
                            <td><?php echo $Android["Id"] ?></td>
                            <td><?php echo $Android["TenMay"] ?></td>
                            <td><?php echo $Android["CauHinh"] ?></td>
                            <td><?php echo $Android["TrangThai"] ?></td>
                            <td><?php echo $Android["SoLuong"] ?></td>
                            <td><a class="btn btn-outline-success" href="/code/QLkhoCHDT1/index.php?action=update&Id=<?php echo $Android["Id"] ?>">Sửa</a></td>
                            <td><a class="btn btn-outline-info" onclick="return confirm('Bạn có muốn xóa dữ liệu không!');" href="/code/QLkhoCHDT/index.php?action=delete&Id=<?php echo $Android["Id"] ?> ">Xóa</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php
            include './sotrang.php';
            ?>
        </div>
        <div class="color_right col-sm-1 text-center text-danger">
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>
</html>