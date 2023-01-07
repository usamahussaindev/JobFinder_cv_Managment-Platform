<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "operate_crud");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$tel = mysqli_real_escape_string($link, $_REQUEST['tel']);
$msg = mysqli_real_escape_string($link, $_REQUEST['msg']);


$sql = "INSERT INTO contact (fullname, email, tel, msg) VALUES ('$fullname','$email','$tel','$msg')";
if(mysqli_query($link, $sql)){
    echo "Thanks, Complain receive successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 // Close connection
mysqli_close($link);
?>
<a href="index.php" class="button1">< HOME PAGE</a>
  <style>
  .button1 {
            margin: 5px 15px;
            width: 80px;
            background: #0069f7;
            padding: 3px 10px;
            border: 0;
            border-radius: 5px;
            color: white;
            font-size: 15px;
        }
    </style>