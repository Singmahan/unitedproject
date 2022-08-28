<?php
session_start();
include('connect/dbconnect.php');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST['import_file_btn1'])) {
    $fileName = $_FILES['import_file1']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed_ext = ['xls', 'csv', 'xlsx'];

    if (in_array($file_ext, $allowed_ext)) {
        $targetPath = $_FILES['import_file1']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($targetPath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach ($data as $row) {
            if ($count > 0) {

                $ex1_code = $row[0];
                $ex1_fullname = $row[1];
                $ex1_number = $row[2];
                $ex1_rednumber = $row[3];
                $ex1_data01 = $row[4];
                $ex1_data02 = $row[5];
                $ex1_data03 = $row[6];
                $ex1_data04 = $row[7];
                $ex1_data05 = $row[8];
                $ex1_data06 = $row[9];
                $ex1_data07 = $row[10];
                $ex1_date_07 = $row[11];
                $ex1_data08 = $row[12];
                $ex1_date_08 = $row[13];
                $ex1_data09 = $row[14];
                $ex1_date_09 = $row[15];
                $ex1_data10 = $row[16];
                $ex1_date_10 = $row[17];
                $ex1_data11 = $row[18];

                // insert 
                $insert_query = "INSERT INTO excel_import1 
                (ex1_code,ex1_fullname,ex1_number,ex1_rednumber,ex1_data01,ex1_data02,ex1_data03,ex1_data04,ex1_data05,
                ex1_data06,ex1_data07,ex1_date_07,ex1_data08,ex1_date_08,ex1_data09,ex1_date_09,ex1_data10,ex1_date_10,ex1_data11) 
                VALUES 
                ('$ex1_code','$ex1_fullname','$ex1_number','$ex1_rednumber','$ex1_data01','$ex1_data02','$ex1_data03','$ex1_data04',
                '$ex1_data05','$ex1_data06','$ex1_data07','$ex1_date_07','$ex1_data08','$ex1_date_08','$ex1_data09','$ex1_date_09','$ex1_data10','$ex1_date_10',
                '$ex1_data11')";
                
                $insert_result = mysqli_query($dbcon, $insert_query);
                $msg = true;
            } else {
                $count = "1";
            }
        }
        if (isset($msg)) {
            $_SESSION['status'] = "เพิ่มข้อมูลสำเร็จ !";
            header("Location: admin_data1.php?page=show_data1");
            exit(0);
        } else {
            $_SESSION['status'] = "เพิ่มข้อมูลไม่สำเร็จ !";
            header("Location: admin_data1.php?page=show_data1");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "Invalid File";
        header("Location: admin_data1.php?page=add_data_excel1");
        exit(0);
    }
}
