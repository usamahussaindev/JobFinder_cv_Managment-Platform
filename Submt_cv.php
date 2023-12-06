
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "operate_crud");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// create variable in php to hold data submitted by cv form data
$first_name = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$pin = mysqli_real_escape_string($link, $_REQUEST['pin']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$qualification = mysqli_real_escape_string($link, $_REQUEST['qualification']);
$specialization = mysqli_real_escape_string($link, $_REQUEST['specialization']);


$sql = "INSERT INTO cv_data (firstname, lastname, email,mobile,gender,dob,address,city,pin,state,qualification,specialization) VALUES ('$first_name', '$last_name', '$email','$mobile', '$gender', '$dob', '$address', '$city', '$pin', '$state', '$qualification', '$specialization')";

if(mysqli_query($link, $sql)){
    echo "Submitted successfully.";
    
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