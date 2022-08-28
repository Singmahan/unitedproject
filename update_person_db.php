<?php 
    session_start();
    include('connect/dbconnect.php');
    if (isset($_POST['update_person'])) {
        $person_id  = $_POST['person_id'];
        $person_code = $_POST['person_code'];
        $person_fullname = $_POST['person_fullname'];
        $person_number = $_POST['person_number'];
        $person_rednumber = $_POST['person_rednumber'];
        $person_deed_number = $_POST['person_deed_number'];
        $person_date_bank = $_POST['person_date_bank'];
        $person_date_legal = $_POST['person_date_legal'];
        $person_note = $_POST['person_note'];
    
        $update_person = "UPDATE person SET person_code='$person_code',person_fullname='$person_fullname',person_number='$person_number',person_rednumber='$person_rednumber',
        person_deed_number='$person_deed_number',person_date_bank='$person_date_bank',person_date_legal='$person_date_legal',person_note='$person_note' WHERE person_id='$person_id'";
    
        $update_query = mysqli_query($dbcon, $update_person);
        
        if ($update_query) {
            $_SESSION['status'] = "Update ข้อมูลสำเร็จ !";
            header("Location: admin_data1.php?page=show_person");
        } else {
            $_SESSION['status'] = "Update ข้อมูลไม่สำเร็จ !";
            header("Location: admin_data1.php?page=show_person");
        }
    }
?>