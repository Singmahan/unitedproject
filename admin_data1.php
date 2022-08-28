<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <title>Admin Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="#">
                ระบบจัดเก็บข้อมูลเบื้องต้น
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    ยินดีต้อนรับเข้าสู่ระบบ, 
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">ข้อมูลส่วนตัว</a></li>
                    <li><a class="dropdown-item" href="index.php">ออกจากระบบ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="admin_data1.php?admin_data1.php">
                                <span data-feather="home"></span>
                                <i class="fa-solid fa-house"></i> จัดการข้อมูล
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="admin_data1.php?page=show_person">
                                <span data-feather="admin_data1"></span>
                                <i class="fa-solid fa-list"></i> รายการข้อมูลเจ้าหนี้นอก
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="admin_data1.php?admin_data1.php">
                                <span data-feather="admin_data1"></span>
                                <i class="fa-solid fa-list"></i> รายการเบิกเงินเจ้าหนี้นอก
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="admin_data1.php?admin_data1.php">
                                <span data-feather="admin_data1"></span>
                                <i class="fa-solid fa-list"></i> รายการข้อมูลงานฟ้อง
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <span data-feather="file-text"></span>
                                <i class="fa-solid fa-right-from-bracket"></i> ออกจากระบบ
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin_data1.php?admin_data1.php">หน้าหลัก</a></li>
                    </ol>
                </nav> -->
                <!-- ส่วนเนื้อหา -->
                <div class="right_col mt-2">
                    <?php
                    $queries = array();
                    parse_str($_SERVER['QUERY_STRING'], $queries);
                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                    switch ($queries['page']) {

                            // เพิ่มข้อมูลเจ้าหนี้นอก

                        case 'ex1_data02_type':
                            include 'ex1_data02_type.php';
                            break;
                            // ฟอร์ม import excel
                        case 'add_person_excel':
                            include 'add_person_excel.php';
                            break;
                            // แสดงข้อมูลลูกหนี้ทั้งหมด 
                        case 'show_person':
                            include 'show_person.php';
                            break;
                            // แก้ไขข้อมูลลูกหนี้ 
                        case 'edit_person':
                            include 'edit_person.php';
                            break;

                            // ดูข้อมูลเพิ่มเติม
                        case 'person_view':
                            include 'person_view.php';
                            break;


                        case 'edit_data06_type':
                            include 'edit_data06_type.php';
                            break;

                        case 'detail_data1':
                            include 'detail_data1.php';
                            break;

                            // ค้นหางานฟ้อง
                        case 'search_data2':
                            include 'search_data2.php';
                            break;
                    }
                    ?>
                </div>
            </main>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row">

            <div class="container mt-3">
                <div class="row">


                </div>
            </div>
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>