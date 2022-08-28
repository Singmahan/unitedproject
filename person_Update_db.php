<?php
include('connect/dbconnect.php');

$edit_id = $_POST['edit_id'];
$person_code = $_POST['person_code'];
$person_fullname = $_POST['person_fullname'];
$person_number = $_POST['person_number'];
$person_rednumber = $_POST['person_rednumber'];
$person_deed_number = $_POST['person_deed_number'];
$person_sales = $_POST['person_sales'];
$person_province = $_POST['person_province'];
$person_legal = $_POST['person_legal'];
$person_date_bank = $_POST['person_date_bank'];
$person_date_legal = $_POST['person_date_legal'];
$person_note = $_POST['person_note'];

$person_update = "UPDATE person SET 
person_code ='" . $person_code . "',
person_fullname ='" . $person_fullname . "', 
person_number ='" . $person_number . "', 
person_rednumber ='" . $person_rednumber . "', 
person_deed_number ='" . $person_deed_number . "', 
person_sales ='" . $person_sales . "', 
person_province ='" . $person_province . "', 
person_legal ='" . $person_legal . "', 
person_date_bank ='" . $person_date_bank . "', 
person_date_legal ='" . $person_date_legal . "', 
person_note ='" . $person_note . "'

WHERE person_id ='" . $edit_id . "'";
$result = mysqli_query($dbcon, $person_update);
if ($result) {
    echo "OK";
} else {
    echo "NOT OK";
}
