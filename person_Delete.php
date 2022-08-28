<?php
include('connect/dbconnect.php');

if (isset($_POST['program'])) {
    $program = $_POST['program'];
    $program = stripslashes($program);

    if ($program == "delete_data") {
        $id = $_POST['id'];
        $person_delete = "DELETE FROM person WHERE person_id ='" . $id . "'";
        $result = mysqli_query($dbcon, $person_delete);
        if ($result) {
            echo "OK";
        } else {
            echo "NOT OK";
        }
    }
}
