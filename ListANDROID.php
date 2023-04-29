<?php
$ListAndroid=array();
$record_per_page = 5;
$total_records = mysqli_query($conn, "SELECT COUNT(*) as total FROM quanlykhochdt2")->fetch_assoc()["total"];
$total_pages = ceil($total_records / $record_per_page);
$current_page = isset($_GET['page']) ? $_GET['page']:1;
$start_record = ($current_page - 1) * $record_per_page;
$sql="Select Id,TenMay,CauHinh,TrangThai,SoLuong From quanlykhochdt2 limit $start_record, $record_per_page";
$result=$conn->query($sql);
if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        array_push($ListAndroid,$row);
    }
}
?>