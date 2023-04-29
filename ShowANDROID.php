<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 0.1">
    <link rel="stylesheet" href="QLkhoCHDT.css">
    <title>Quản Lý Kho Cửa Hàng Điện Thoại</title>
</head>
<body>
    <div class="logo">
        <img src="https://clipground.com/images/mobile-clipart-vector-9.jpg" width="50px">
        Quản Lý Kho Cửa Hàng Điện Thoại
        <a class="btn" onclick="return confirm('Bạn chắc chắn muốn thoát!');" href="/code/menungoai.php">Menu Ngoài</a>
        <a class="logogit" href="https://github.com/quanganh123/quanlykhoCHDT/tree/master"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" width="50px"></a>
    </div>
    <div class="menu">
        <li><a href="http://localhost/code/indexAdmin.php"><img src="https://clipground.com/images/user-icon-vector-png-6.png" width="15px"> Quản Lý Admin</a></li>
        <li><a href="http://localhost/code/indexIos.php"><img src="https://th.bing.com/th/id/R.312e81f96596fb37324b0188ca666ecf?rik=ZmjEfy8Zm2t2hA&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_229805.png&ehk=87HeIWyeVqocnpW3QYc5PbCClLCVbOvudLl09z7%2fky4%3d&risl=&pid=ImgRaw&r=0" width="15px"> Quản Lý Điện Thoại Ios</a></li>
        <li><a href="http://localhost/code/indexAndroid.php"><img src="https://1000marcas.net/wp-content/uploads/2020/01/Logo-Android-2048x1280.png" width="30px"> Quản Lý Điện Thoại Android</a></li>
    </div>
    <div class="namefrom">
        <h4>Quản Lý Điện Thoại Hãng Android</h4>
    </div>
    <div class="table1">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Tên Máy</th>
                <th>Cấu Hình</th>
                <th>Trạng Thái</th>
                <th>Số Lượng</th>
                <th></th>
                <th><a class="btn3" href="FromAddmewAndroid.php">Thêm mới</a></th>
            </tr>
            <?php foreach ($ListAndroid as $Android) { ?>
                <tr class="hover">
                    <td><?php echo $Android["Id"] ?></td>
                    <td><?php echo $Android["TenMay"] ?></td>
                    <td><?php echo $Android["CauHinh"] ?></td>
                    <td><?php echo $Android["TrangThai"] ?></td>
                    <td><?php echo $Android["SoLuong"] ?></td>
                    <td><a class="btn2" href="/code/indexAndroid.php?action=update&Id=<?php echo $Android["Id"] ?>">Sửa</a></td>
                    <td><a class="btn4" onclick="return confirm('Bạn chắc chắn muốn thoát!');" href="/code/indexAndroid.php?action=delete&Id=<?php echo $Android["Id"] ?>">Xóa</a></td>
                </tr>
            <?php } ?>
        </table>
        <?php
        include './sotrang2.php';
        ?>
    </div>
    <div class="kengang"></div>
</body>
</html>