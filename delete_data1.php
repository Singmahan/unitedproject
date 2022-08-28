<?php
session_start();
include('connect/dbconnect.php');

$ex1_id = $_GET['ex1_id'];

$del = "DELETE FROM excel_import1 WHERE ex1_id='$ex1_id'";
$del_query = mysqli_query($dbcon, $del);

if ($del_query) {
    $_SESSION['status'] = "ลบข้อมูลสำเร็จ !";
    header("Location: admin_data1.php?page=show_data1");
} else {
    $_SESSION['status'] = "ลบข้อมูลไม่สำเร็จ !";
    header("Location: admin_data1.php?page=show_data1");
}
