<?php
   include 'db.php';
   if (isset($_POST['job_title'])) {
        $job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
        $Description = mysqli_real_escape_string($conn, $_POST['Description']);
        $Last_Date = mysqli_real_escape_string($conn, $_POST['Last_Date']);
      // insert query
      $sql = "INSERT INTO users(job_title, Description,Last_Date) VALUES ('$job_title','$Description','$Last_Date')";
         if(mysqli_query($conn, $sql)) {
            session_start();
            $_SESSION['success_message'] = "Data saved successfully.";
            header("Location: createjobs.php");
            exit();
         } else {
            echo "Server problem, Try after sometime.";
         }
      }
