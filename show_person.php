<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- datatables  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>

<body>

    <!-- Button  -->

    <div class="col-auto">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addPerson">
        <i class="fa-solid fa-plus"></i> เพิ่มข้อมูลลูกหนี้
        </button>
        <a href="admin_data1.php?page=add_person_excel" class="btn btn-primary btn-sm "><i class="fa-solid fa-file-import"></i> Import Excel</a>
    </div>

    <!-- Start Add Data Modal -->
    <div class="modal fade" id="addPerson" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="#" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">เพิ่มข้อมูลลูกหนี้</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col input-group-sm">
                                <label for="">อันดับจ่าย</label>
                                <input type="text" name="person_code" id="person_code" class="form-control">
                                <label id="lblPerson_code" style="color:red;"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col input-group-sm">
                                <label for="">ชื่อ - สกุล</label>
                                <input type="text" name="person_fullname" id="person_fullname" class="form-control">
                                <label id="lblPerson_fullname" style="color:red;"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col input-group-sm">
                                <label for="">เลขที่เงินกู้</label>
                                <input type="text" name="person_number" id="person_number" class="form-control">
                                <label id="lblPerson_number" style="color:red;"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col input-group-sm">
                                <label for="">วิธีขาย</label>
                                <input type="text" name="person_sales" id="person_sales" class="form-control">
                                <label id="lblPerson_Sales" style="color:red;"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col input-group-sm">
                                <label for="">ศาล</label>
                                <input type="text" name="person_province" id="person_province" class="form-control">
                                <label id="lblPerson_province" style="color:red;"></label>
                            </div>
                            <div class="col input-group-sm">
                                <label for="">สำนักงานบังคับคดี</label>
                                <input type="text" name="person_legal" id="person_legal" class="form-control">
                                <label id="lblPerson_legal" style="color:red;"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col input-group-sm">
                                <label for="">เลขคดีแดง</label>
                                <input type="text" name="person_rednumber" id="person_rednumber" class="form-control">
                                <label id="lblPerson_rednumber" style="color:red;"></label>
                            </div>
                            <div class="col input-group-sm">
                                <label for="">โฉนดเลขที่/ห้องชุด</label>
                                <input type="text" name="person_deed_number" id="person_deed_number" class="form-control">
                                <label id="lblPerson_deed_number" style="color:red;"></label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col input-group-sm">
                                <label for="">วันที่รับโฉนดจากแบงก์</label>
                                <input type="date" name="person_date_bank" id="person_date_bank" class="form-control">
                            </div>
                            <div class="col input-group-sm">
                                <label for="">วันที่ส่งโฉนดกรมบังคับคดี</label>
                                <input type="date" name="person_date_legal" id="person_date_legal" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col input-group-sm">
                                <label for="">หมายเหตุ</label>
                                <div class="form-floating">
                                    <textarea class="form-control" name="person_note" id="person_note" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">กรอกข้อมูล...</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">ปิด</button>
                        <button type="button" id="savePerson" class="btn btn-success btn-sm">บันทึกข้อมูล</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Add Data Modal -->

    <!-- Start Edit  -->
    <div class="modal fade" id="editPerson" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form action="#" method="POST" id="updateForm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">แก้ไขข้อมูลลูกหนี้</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="person_update">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">ปิด</button>
                        <button type="button" id="updatePerson" class="btn btn-success btn-sm">บันทึกข้อมูล</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Edit  -->
    <!-- show data  -->
    <div class="card mt-2">
        <div class="card-header">
            <h5 class="text-center">แสดงข้อมูลงานบังคับคดี</h5>
        </div>
        <div class="card-body">
            <?php
            include('connect/dbconnect.php');
            $select_person = "SELECT * FROM person";
            $query = mysqli_query($dbcon, $select_person);

            if (mysqli_num_rows($query) > 0) { ?>

                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr style="font-size: 14px;" align="center">
                            <th>ลำดับ</th>
                            <th>อันดับจ่าย</th>
                            <th>ชื่อ - สกุล</th>
                            <th>เลขที่บัญชี</th>
                            <th>ดูเพิ่มเติม</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr style="font-size: 14px;">
                                <td width="5%" align="center"><?php echo $row['person_id']; ?></td>
                                <td width="10%" align="center"><?php echo $row['person_code']; ?></td>
                                <td width="20%"><?php echo $row['person_fullname']; ?></td>
                                <td width="25%"><?php echo $row['person_number']; ?></td>
                                <td style="width: 8%;" align="center">
                                    <a href="admin_data1.php?page=person_view&person_id=<?php echo $row['person_id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                </td>
                                <td style="width: 5%;" align="center">
                                    <button type="button" class="btn btn-success btn-sm edit_data" id="<?php echo $row['person_id']; ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                </td>
                                <td style="width: 5%;" align="center">
                                    <button type="button" class="btn btn-danger btn-sm delete_data" id="<?php echo $row['person_id']; ?>"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else {
                echo "<div class='text-center'>
                        <h5>ไม่มีข้อมูลในตาราง !</h5>
                      </div>";
            } ?>
        </div>
    </div>

    <!-- Jquery  -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- datatables  -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // dataTable 
            $('#myTable').DataTable();

            // save 
            $(document).on('click', '#savePerson', function() {
                var person_code = $("#person_code").val();
                var person_fullname = $("#person_fullname").val();
                var person_number = $("#person_number").val();
                var person_rednumber = $("#person_rednumber").val();
                var person_deed_number = $("#person_deed_number").val();
                var person_sales = $("#person_sales").val();
                var person_province = $("#person_province").val();
                var person_legal = $("#person_legal").val();
                var person_date_bank = $("#person_date_bank").val();
                var person_date_legal = $("#person_date_legal").val();
                var person_note = $("#person_note").val();

                if (person_code == "") {
                    $("#lblPerson_code").html("กรุณาป้อนข้อมูล !");
                } else if (person_fullname == "") {
                    $("#lblPerson_fullname").html("กรุณาป้อนข้อมูล !");
                } else if (person_number == "") {
                    $("#lblPerson_number").html("กรุณาป้อนข้อมูล !");
                } else if (person_rednumber == "") {
                    $("#lblPerson_rednumber").html("กรุณาป้อนข้อมูล !");
                } else if (person_deed_number == "") {
                    $("#lblPerson_deed_number").html("กรุณาป้อนข้อมูล !");
                } else if (person_sales == "") {
                    $("#lblPerson_sales").html("กรุณาป้อนข้อมูล !");
                } else if (person_province == "") {
                    $("#lblPerson_province").html("กรุณาป้อนข้อมูล !");
                } else if (person_legal == "") {
                    $("#lblPerson_legal").html("กรุณาป้อนข้อมูล !");
                } else {
                    $.ajax({
                        url: "add_person_db.php",
                        method: "POST",
                        data: {
                            person_code: person_code,
                            person_fullname: person_fullname,
                            person_number: person_number,
                            person_rednumber: person_rednumber,
                            person_deed_number: person_deed_number,
                            person_sales: person_sales,
                            person_province: person_province,
                            person_legal: person_legal,
                            person_date_bank: person_date_bank,
                            person_date_legal: person_date_legal,
                            person_note: person_note,
                        },
                        success: function(data) {
                            if (data == 'OK') {
                                Swal.fire(
                                    'บันทึกข้อมูลสำเร็จ!',
                                    '',
                                    'success'
                                ).then(function() {
                                    window.location.href = "admin_data1.php?page=show_person";
                                })
                            } else {
                                Swal.fire(
                                    'เกิดข้อผิดพลาด!',
                                    'โปรดลองใหม่อีกครั้ง',
                                    'error'
                                )
                            }
                        }
                    });
                }
            });
            // Update Data 
            $(document).on('click', '.edit_data', function() {
                var edit_id = $(this).attr('id');
                $.ajax({
                    url: "edit_person_db.php",
                    method: "POST",
                    data: {
                        edit_id: edit_id
                    },
                    success: function(data) {
                        $("#person_update").html(data);
                        $("#editPerson").modal('show');
                    }
                });
            });
            $(document).on('click', '#updatePerson', function() {
                $.ajax({
                    url: "person_Update_db.php",
                    method: "POST",
                    data: $("#updateForm").serialize(),
                    success: function(data) {
                        if (data == 'OK') {
                            Swal.fire(
                                'แก้ไขข้อมูลสำเร็จ!',
                                '',
                                'success'
                            ).then(function() {
                                window.location.href = "admin_data1.php?page=show_person";
                            })
                        } else {
                            Swal.fire(
                                'เกิดข้อผิดพลาด!',
                                'โปรดลองใหม่อีกครั้ง',
                                'error'
                            )
                        }
                    }
                });
            });

            // delete
            $(document).on('click', '.delete_data', function() {
                id = $(this).attr("id");
                Swal.fire({
                    title: 'ยืนยันการลบรายชื่อนี้ใช่หรือไม่ ?',
                    text: "ลบรายชื่อนี้จะไม่สามารถกู้คืนได้อีก",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ยืนยันการลบรายการ',
                    cancelButtonText: 'ยกเลิก'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: "person_Delete.php",
                            method: "POST",
                            data: {
                                id: id,
                                program: "delete_data"
                            },
                            success: function(data) {
                                if (data == 'OK') {
                                    Swal.fire(
                                        'ลบรายการสำเร็จ!',
                                        '',
                                        'success'
                                    ).then(function() {
                                        window.location.reload();
                                    })
                                } else {
                                    Swal.fire(
                                        'เกิดข้อผิดพลาด!',
                                        'โปรดลองใหม่อีกครั้ง',
                                        'error'
                                    )
                                }
                            }
                        });
                    }
                })
            });
        });
    </script>

</body>

</html>