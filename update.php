<?php
include_once('db.php');
mysqli_query($conn, "UPDATE users set job_title='" . $_POST['job_title'] . "' ,Description='" . $_POST['Description'] . "',Last_Date='" . $_POST['Last_Date'] . "' WHERE id='" . $_POST['id'] . "'");

if (isset($_POST['job_title'])) {
    session_start();
    $_SESSION['success_message'] = "Data update successfully.";
    header("Location: createJobs.php");
    exit();
} else {
    echo "Server problem, Try after sometime.";
}
