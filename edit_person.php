<?php
include('connect/dbconnect.php');

$person_id = $_GET['person_id'];
$person_select = "SELECT * FROM person WHERE person_id='$person_id'";
$query = mysqli_query($dbcon, $person_select);

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_array($query)) { ?>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>แก้ไขข้อมูลลูกหนี้</h5>
                </div>
                <div class="card-body">
                    <form action="update_person_db.php" method="POST">
                        <input type="hidden" name="person_id" value="<?php echo $row['person_id']; ?>">
                        <div class="row">
                            <div class="col input-group-sm">
                                <label for="">อันดับจ่าย</label>
                                <input type="text" name="person_code" class="form-control" value="<?php echo $row['person_code']; ?>">
                            </div>
                            <div class="col input-group-sm">
                                <label for="">ชื่อ - สกุล</label>
                                <input type="text" name="person_fullname" class="form-control" value="<?php echo $row['person_fullname']; ?>">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col input-group-sm">
                                <label for="">เลขที่เงินกู้</label>
                                <input type="text" name="person_number" class="form-control" value="<?php echo $row['person_number']; ?>">
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col input-group-sm">
                                <label for="">เลขคดีแดง</label>
                                <input type="text" name="person_rednumber" class="form-control" value="<?php echo $row['person_rednumber']; ?>">
                            </div>
                            <div class="col input-group-sm">
                                <label for="">โฉนดเลขที่/ห้องชุด</label>
                                <input type="text" name="person_deed_number" class="form-control" value="<?php echo $row['person_deed_number']; ?>">
                            </div>

                        </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col input-group-sm">
                    <label for="">วันที่รับโฉนดจากแบงก์</label>
                    <input type="date" name="person_date_bank" class="form-control" value="<?php echo $row['person_date_bank'];  ?>">
                </div>
                <div class="col input-group-sm">
                    <label for="">วันที่ส่งโฉนดกรมบังคับคดี</label>
                    <input type="date" name="person_date_legal" class="form-control" value="<?php echo $row['person_date_legal']; ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col input-group-sm">
                    <label for="">หมายเหตุ</label>
                    <div class="form-floating">
                        <textarea class="form-control" name="person_note" placeholder="Leave a comment here" style="height: 100px"><?php echo $row['person_note']; ?></textarea>
                        <label for="floatingTextarea2">กรอกข้อมูล...</label>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" name="update_person" class="btn btn-success form-control">อัพเดทข้อมูล</button>
            </div>
            </form>
        </div>
        </div>
        </div>
<?php }
} else {
    echo "ไม่พบข้อมูล";
}
?>