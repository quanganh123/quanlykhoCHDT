<?php
$IosId=null;
$Ios = null;
if(isset($_GET['Id']))
    $IosId=$_GET['Id'];
if($action=="update") {
    $sql = "Select * FROM quanlykhochdt1 where Id=" . $IosId;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Ios = $row;
        }
    }
}else{
    $Ios=array(
        "Id"=>"",
        "TenMay"=>"",
        "CauHinh"=>"",
        "TrangThai"=>"",
        "SoLuong"=>"",
    );
}
?>
<form class="pt-5" method="post" action="index.php?action=post_update">
<h3 class="text-center">Sửa Ios</h2>
    <div class="row">
        <div class="offset-4 col-4">
            <div class="form-group">
                <label for="TenMay">Tên Máy</label>
                <input type="text" class="form-control" id="TenMay" name="TenMay">
            </div>
                <div class="form-group">
                    <label for="CauHinh">Cấu Hình</label>
                    <input type="text" class="form-control" id="CauHinh" name="CauHinh">
                </div>
            <div class="form-group">
                <label for="TrangThai">Trạng Thái</label>
                <input type="text" class="form-control" id="TrangThai" name="TrangThai">
            </div>
            <div class="form-group">
                <label for="SoLuong">Số Lượng</label>
                <input type="text" class="form-control" id="SoLuong" name="SoLuong">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-4 col-4">
                <button class="btn btn-outline-primary">Cập nhật</button>
        </div>
    </div>
    <input type="hidden" name="Id" value="<?php echo $Ios["Id"] ?>">
</form>
