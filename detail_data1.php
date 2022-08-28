<?php session_start(); ?>
<div class="card">
    <div class="card-header">
        <p>แสดงข้อมูลงานบังคับคดี</p>

    </div>

    <div class="card-body">
        <?php
        include('connect/dbconnect.php');

        $ex1_id = $_GET['ex1_id'];
        // $ex1 = "SELECT * FROM excel_import1 WHERE ex1_id='$ex1_id'";
        $ex1 = "SELECT * FROM excel_import1 
                INNER JOIN ex1_data02_type ON excel_import1.data02_id=ex1_data02_type.data02_id 
                INNER JOIN ex1_data03_type ON excel_import1.data03_id=ex1_data03_type.data03_id 
                WHERE ex1_id='$ex1_id'";
        $ex1_query = mysqli_query($dbcon, $ex1);
        $ex1_row = mysqli_fetch_array($ex1_query);

        ?>

        <div class="container-fullid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <p style="font-size: 35px;" align="center"><?php echo $ex1_row['ex1_code']; ?></p>
                            <p align="center">เลขคดีแดง <?php echo $ex1_row['ex1_rednumber']; ?></p>
                        </div>
                        <div class="card-body">
                            <p style="font-size: 22px;" class="float-end">
                                <?php echo $ex1_row['ex1_fullname']; ?>
                                <?php echo $ex1_row['ex1_number']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header text-white bg-primary mb-3">
                            <h5>รายละเอียดคดี</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr align="center">
                                        <th>เลขโฉนด</th>
                                        <th>วันที่รับโฉนดจาก ธอส.</th>
                                        <th>วันที่ส่งโฉนดเข้ากรม</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr align="center">
                                        <td width="70%"><?php echo $ex1_row['ex1_data01']; ?></td>
                                        <td><?php echo $ex1_row['ex1_data04']; ?></td>
                                        <td><?php echo $ex1_row['ex1_data05']; ?></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- วิธีการขาย  -->
                    <div class="card">
                        <div class="card-header text-white bg-primary mb-3">
                            <h5>วิธีการขาย</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr align="center">
                                        <th>วิธีการขาย</th>
                                        <th>ราคา</th>
                                        <th>วันที่ขายได้</th>
                                        <th>อัพเดทข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr align="center">
                                        <td><?php echo $ex1_row['data02_name']; ?></td>
                                        <td><?php echo $ex1_row['data02_price']; ?></td>
                                        <td><?php echo $ex1_row['data02_date']; ?></td>
                                        <td>
                                            <a href="admin_data1.php?page=edit_ex1_data02&ex1_id=<?php echo $ex1_row['ex1_id']; ?>" class="btn btn-success btn-sm">อัพเดทข้อมูล</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- สำนักงานบังคับคดี  -->
                    <div class="card">
                        <div class="card-header text-white bg-primary mb-3">
                            <h5>สำนักงานบังคับคดี</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr align="center">
                                        <th>สำนักงานบังคับคดี</th>
                                        <th>แก้ไขข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr align="center">
                                        <td><?php echo $ex1_row['data03_name']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-sm">แก้ไขข้อมูล</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- ส่งต้นฉบับคืนแบงก์  -->
                    <div class="card">
                        <div class="card-header text-white bg-primary mb-3">
                            <h5>ส่งคืนต้นฉบับ</h5>
                        </div>
                        <div class="card-body">
                        <?php 
                            $sql = "SELECT * FROM excel_import1  
                                    INNER JOIN ex1_data06_type ON excel_import1.data06_id=ex1_data06_type.data06_id
                                    WHERE ex1_id='$ex1_id'";
                            $query = mysqli_query($dbcon, $sql);
                            $row = mysqli_fetch_array($query);
                        ?>
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>UP</th>
                                        <th>ประเภทการคืนต้นฉบับ</th>
                                        <th>วันที่คืนต้นฉบับ</th>
                                        <th>อัพเดทข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td><?php echo $row['ex1_data06']; ?></td>
                                        <td><?php echo $row['data06_name']; ?></td>
                                        <td><?php echo $row['data06_date']; ?></td>
                                        <td>
                                            <a href="admin_data1.php?page=edit_ex1_data06&ex1_id=<?php echo $ex1_row['ex1_id']; ?>" class="btn btn-success btn-sm">อัพเดทข้อมูล</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- รายการเบิกเงิน  -->
                    <div class="card">
                        <div class="card-header text-white bg-primary mb-3">
                            <h5>รายการเบิกเงิน</h5>
                        </div>
                        <div class="card-body">
                            <!-- เบิกเงินค่าส่งโฉนด 200  -->
                            <h5>เบิกเงินค่าส่งโฉนด 200</h5>
                            <table class="table">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <!-- <th>#</th> -->
                                        <th>จำนวนเงิน</th>
                                        <th>วันที่เบิกเงิน</th>
                                        <th>อัพเดทข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <!-- <td><b>#</b></td> -->
                                        <td><strong><?php echo $ex1_row['ex1_data07']; ?></strong></td>
                                        <td><?php echo $ex1_row['ex1_date_07']; ?></td>
                                        <td>
                                            <a href="admin_data1.php?page=edit_ex1_data07&ex1_id=<?php echo $ex1_row['ex1_id']; ?>" class="btn btn-success btn-sm">อัพเดทข้อมูล</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- เบิกเงินบุริมฯ งวด 1  -->
                            <h5>เบิกเงินบุริมฯ งวด 1</h5>
                            <table class="table">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <!-- <th>#</th> -->
                                        <th>จำนวนเงิน</th>
                                        <th>วันที่เบิกเงิน</th>
                                        <th>อัพเดทข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <!-- <td><b>#</b></td> -->
                                        <td><strong><?php echo $ex1_row['ex1_data08']; ?></strong></td>
                                        <td><?php echo $ex1_row['ex1_date_08']; ?></td>
                                        <td>
                                            <a href="admin_data1.php?page=edit_ex1_data08&ex1_id=<?php echo $ex1_row['ex1_id']; ?>" class="btn btn-success btn-sm">อัพเดทข้อมูล</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- เบิกเงินบุริมฯ งวด 2  -->
                            <h5>เบิกเงินบุริมฯ งวด 2</h5>
                            <table class="table">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <!-- <th>#</th> -->
                                        <th>จำนวนเงิน</th>
                                        <th>วันที่เบิกเงิน</th>
                                        <th>อัพเดทข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <!-- <td><b>#</b></td> -->
                                        <td><strong><?php echo $ex1_row['ex1_data09']; ?></strong></td>
                                        <td><?php echo $ex1_row['ex1_date_09']; ?></td>
                                        <td>
                                            <a href="admin_data1.php?page=edit_ex1_data09&ex1_id=<?php echo $ex1_row['ex1_id']; ?>" class="btn btn-success btn-sm">อัพเดทข้อมูล</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- เบิกเงินโจทก์ถอน - ขายติด - ขายปลอด  -->
                            <h5>เบิกเงินโจทก์ถอน - ขายติด - ขายปลอด</h5>
                            <table class="table">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <!-- <th>#</th> -->
                                        <th>จำนวนเงิน</th>
                                        <th>วันที่เบิกเงิน</th>
                                        <th>อัพเดทข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <!-- <td><b>#</b></td> -->
                                        <td><strong><?php echo $ex1_row['ex1_data10']; ?></strong></td>
                                        <td><?php echo $ex1_row['ex1_date_10']; ?></td>
                                        <td>
                                            <a href="admin_data1.php?page=edit_ex1_data10&ex1_id=<?php echo $ex1_row['ex1_id']; ?>" class="btn btn-success btn-sm">อัพเดทข้อมูล</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <h5> *** หมายเหตุ</h5>
                        <p><?php echo $ex1_row['ex1_data11']; ?></p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>