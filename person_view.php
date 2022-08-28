<?php
include('connect/dbconnect.php');

$person_id = $_GET['person_id'];
$view_select = "SELECT * FROM person WHERE person_id='$person_id'";
$query = mysqli_query($dbcon, $view_select);
$row = mysqli_fetch_array($query);
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- sweetalert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<p style="font-size: 20px;">แสดงข้อมูลลูกหนี้ : ชื่อ - นามสกุล : <?php echo $row['person_fullname']; ?></p>

<div class="row mt-3">
    <div class="col">
        <b>อันดับจ่าย</b> <br>
        <?php echo $row['person_code']; ?>
    </div>
    <div class="col">
        <b>เลขที่บัญชี</b> <br>
        <?php echo $row['person_number']; ?>
    </div>
    <div class="col">
        <b>เลขคดีแดง</b> <br>
        <?php echo $row['person_rednumber']; ?>
    </div>
</div>
<hr>
<div class="row">

    <div class="col">
        <b>เลขที่โฉนด</b> <br>
        <?php echo $row['person_deed_number']; ?>
    </div>
    <div class="col">
        <b>วันที่รับโฉนดจากแบงก์</b> <br>
        <?php echo $row['person_date_bank']; ?>
    </div>
    <div class="col">
        <b>วันที่ส่งโฉนดเข้ากรม</b> <br>
        <?php echo $row['person_date_legal']; ?>
    </div>
</div>
<hr>
<div class="row">

    <div class="col">
        <b>วิธีการขาย</b> <br>
        <?php echo $row['person_sales']; ?><br>
    </div>
    <div class="col">
        <b>ศาล</b> <br>
        <?php echo $row['person_province']; ?><br>
    </div>
    <div class="col">
        <b>สำนักงานบังคับคดี</b> <br>
        <?php echo $row['person_legal']; ?><br>
    </div>
</div>
<hr>
<div class="row">

    <div class="col">
        <b>* หมายเหตุ</b> <br>
        <?php echo $row['person_note']; ?><br>
    </div>

</div>



