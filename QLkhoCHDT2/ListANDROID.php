<?php
$ListAndroid=array();
$limit=3;
$totalRecord=1;
$offset=isset($_GET["offset"])?(int)$_GET["offset"]:0;
$sql="Select Id,TenMay,CauHinh,TrangThai,SoLuong From quanlykhochdt2 limit $offset,$limit";
$result=$conn->query($sql);
if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        array_push($ListAndroid,$row);
    }
}
$sql = "SELECT * from quanlykhochdt2";
if ($result = mysqli_query($conn, $sql)) 
{
    $totalRecord = mysqli_num_rows( $result );
}
?>