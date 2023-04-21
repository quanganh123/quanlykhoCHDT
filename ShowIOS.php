<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 0.1">
    <link rel="stylesheet" href="QLkhoCHDT.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Quản Lý Kho Cửa Hàng Điện Thoại</title>
</head>

<body>
    <div class="logo">
        <img src="https://clipground.com/images/mobile-clipart-vector-9.jpg" width="50px">
        Quản Lý Kho Cửa Hàng Điện Thoại
        <a class=" btnt btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn thoát!');" href="/code/menungoai.php">Menu Ngoài</a></li>
        <a class="logogit" href="https://github.com/quanganh123/quanlykhoCHDT/tree/master"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" width="50px"></a>
    </div>
    <div class="menu">
        <li><a href="http://localhost/code/indexAdmin.php">Quản Lý Admin</a></li>
        <li><a href="http://localhost/code/indexIos.php">Quản Lý Điện Thoại Ios</a></li>
        <li><a href="http://localhost/code/indexAndroid.php">Quản Lý Điện Thoại Android</a></li>
    </div>
    <div class="container">
        <div class="namefrom">
            <h4>Quản Lý Điện Thoại Ios</h4>
        </div>
        <table class="table table-striped table-hover table-sm text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tên Máy</th>
                    <th>Cấu Hình</th>
                    <th>Trạng Thái</th>
                    <th>Số Lượng</th>
                    <th></th>
                    <th><a class="btn btn-outline-success" href="FromAddmewIos.php">Thêm mới</a></th>
                </tr>
            </thead>
            <tbody class="myTable">
                <?php foreach ($ListIos as $Ios) { ?>
                    <tr>
                        <td><?php echo $Ios["Id"] ?></td>
                        <td><?php echo $Ios["TenMay"] ?></td>
                        <td><?php echo $Ios["CauHinh"] ?></td>
                        <td><?php echo $Ios["TrangThai"] ?></td>
                        <td><?php echo $Ios["SoLuong"] ?></td>
                        <td><a class=" btnxs btn btn-outline-success" href="/code/indexIos.php?action=update&Id=<?php echo $Ios["Id"] ?>">Sửa</a></td>
                        <td><a class=" btnxs btn btn-outline-info" onclick="return confirm('Bạn có muốn xóa dữ liệu không!');" href="/code/indexIos.php?action=delete&Id=<?php echo $Ios["Id"] ?> ">Xóa</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php
        include './sotrang1.php';
        ?>
    </div>
    <div class="kengang"></div>
</body>
</html>