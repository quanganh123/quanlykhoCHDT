<?php
$ListAdmin=array();
$limit=5;
$totalRecord=1;
$offset=isset($_GET["offset"])?(int)$_GET["offset"]:0;
$sql="Select Id,HoVaTen,MaAdmin,User_name,Password From quanlykhochdt limit $offset,$limit";
$result=$conn->query($sql);
if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        array_push($ListAdmin,$row);
    }
}
$sql = "SELECT * from quanlykhochdt";
if ($result = mysqli_query($conn, $sql)) 
{
    $totalRecord = mysqli_num_rows( $result );
}
?>


 

