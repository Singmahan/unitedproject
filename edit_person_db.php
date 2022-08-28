<?php
include('connect/dbconnect.php');

if (isset($_POST['edit_id'])) {
    $id = $_POST['edit_id'];

    $person_select = "SELECT * FROM person WHERE person_id ='$id'";
    $result = mysqli_query($dbcon, $person_select);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['person_id'];
        $person_code = $row['person_code'];
        $person_fullname = $row['person_fullname'];
        $person_number = $row['person_number'];
        $person_rednumber = $row['person_rednumber'];
        $person_deed_number = $row['person_deed_number'];
        $person_sales = $row['person_sales'];
        $person_province = $row['person_province'];
        $person_legal = $row['person_legal'];
        $person_date_bank = $row['person_date_bank'];
        $person_date_legal = $row['person_date_legal'];
        $person_note = $row['person_note'];
    }
}
?>
<input type="hidden" name="edit_id" id="edit_id" value="<?php echo $id; ?>">

<div class="row mt-3">
    <div class="col input-group-sm">
        <label for="">อันดับจ่าย</label>
        <input type="text" name="person_code" id="person_code" class="form-control" value="<?php echo $person_code; ?>">

    </div>
</div>
<div class="row mt-3">
    <div class="col input-group-sm">
        <label for="">ชื่อ - สกุล</label>
        <input type="text" name="person_fullname" id="person_fullname" class="form-control" value="<?php echo $person_fullname; ?>">

    </div>
</div>
<div class="row mt-3">
    <div class="col input-group-sm">
        <label for="">เลขที่เงินกู้</label>
        <input type="text" name="person_number" id="person_number" class="form-control" value="<?php echo $person_number; ?>">
    </div>
</div>
<div class="row">
    <div class="col input-group-sm">
        <label for="">วิธีขาย</label>
        <input type="text" name="person_sales" id="person_sales" class="form-control" value="<?php echo $person_sales; ?>">
        <label id="lblPerson_Sales" style="color:red;"></label>
    </div>
</div>
<div class="row">
    <div class="col input-group-sm">
        <label for="">ศาลจังหวัด</label>
        <input type="text" name="person_province" id="person_province" class="form-control" value="<?php echo $person_province; ?>">
        <label id="lblPerson_province" style="color:red;"></label>
    </div>
    <div class="col input-group-sm">
        <label for="">สำนักงานบังคับคดี</label>
        <input type="text" name="person_legal" id="person_legal" class="form-control" value="<?php echo $person_legal; ?>">
        <label id="lblPerson_legal" style="color:red;"></label>
    </div>
</div>
<div class="row mt-3">
    <div class="col input-group-sm">
        <label for="">เลขคดีแดง</label>
        <input type="text" name="person_rednumber" id="person_rednumber" class="form-control" value="<?php echo $person_rednumber; ?>">
    </div>
    <div class="col input-group-sm">
        <label for="">โฉนดเลขที่/ห้องชุด</label>
        <input type="text" name="person_deed_number" id="person_deed_number" class="form-control" value="<?php echo $person_deed_number; ?>">

    </div>

</div>
<div class="row mt-3">
    <div class="col input-group-sm">
        <label for="">วันที่รับโฉนดจากแบงก์</label>
        <input type="date" name="person_date_bank" id="person_date_bank" class="form-control" value="<?php echo $person_date_bank; ?>">
    </div>
    <div class="col input-group-sm">
        <label for="">วันที่ส่งโฉนดกรมบังคับคดี</label>
        <input type="date" name="person_date_legal" id="person_date_legal" class="form-control" value="<?php echo $person_date_legal; ?>">
    </div>
</div>
<div class="row mt-3">
    <div class="col input-group-sm">
        <label for="">หมายเหตุ</label>
        <div class="form-floating">
            <textarea class="form-control" name="person_note" id="person_note" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?php echo $person_note; ?></textarea>
            <label for="floatingTextarea2">กรอกข้อมูล...</label>
        </div>
    </div>

</div>