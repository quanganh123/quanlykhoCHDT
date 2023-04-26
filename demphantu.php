<?php
require_once "MysqliConnection.php";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT COUNT(*) AS total FROM quanlykhochdt";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Error: " . mysqli_error($conn));
}
$row = mysqli_fetch_assoc($result);
$total = $row['total'];
mysqli_close($conn);
?>