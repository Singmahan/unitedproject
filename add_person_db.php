<?php

include('connect/dbconnect.php');

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

$person_insert = "INSERT INTO person 
    (person_code,
    person_fullname,
    person_number,
    person_rednumber,
    person_deed_number,
    person_sales,
    person_province,
    person_legal,
    person_date_bank,
    person_date_legal,
    person_note) 
    VALUES 
    ('$person_code',
    '$person_fullname',
    '$person_number',
    '$person_rednumber',
    '$person_deed_number',
    '$person_sales',
    '$person_province',
    '$person_legal',
    '$person_date_bank',
    '$person_date_legal',
    '$person_note')";

$result = mysqli_query($dbcon, $person_insert) or die("error in query: $person_insert" . mysqli_error($dbcon));
if ($result) {
    echo "OK";
} else {
    echo "NOT OK";
}
