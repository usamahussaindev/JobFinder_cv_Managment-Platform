
<?php
    include 'db.php';
    $sql = "DELETE FROM cv_data WHERE id='" . $_GET['id'] . "'";
    $conn->query($sql);

    session_start();
    $_SESSION['success_message'] = "data successfully Deleted!!!.";
    header("Location: registeredP.php");
?>