<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

 
  if (empty(trim($_POST["username"]))) {
    $username_err = "Username cannot be blank";
  } else {
    $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);
 
      $param_username = trim($_POST['username']);

    
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already taken";
        } else {
          $username = trim($_POST['username']);
        }
      } else {
        echo "Something went wrong";
      }
    }
  }

  mysqli_stmt_close($stmt);


 
  if (empty(trim($_POST['password']))) {
    $password_err = "Password cannot be blank";
  } elseif (strlen(trim($_POST['password'])) < 5) {
    $password_err = "Password cannot be less than 5 characters";
  } else {
    $password = trim($_POST['password']);
  }

 
  if (trim($_POST['password']) !=  trim($_POST['confirm_password'])) {
    $password_err = "Passwords should match";
  }


 
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

       
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT);

    
      if (mysqli_stmt_execute($stmt)) {
        header("location: account.php");
      } else {
        echo "Something went wrong... cannot redirect!";
      }
    }
    mysqli_stmt_close($stmt);
  }
  mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>account-login</title>
  <link rel="stylesheet" href="css/website.css">
  <link rel="stylesheet" href="css/loginform.css">


</head>

<style>
  body {
    background: url("img/We55.png");
    background-size: cover;
  }
</style>
 

<body>
  <div class="header">

    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.php"><img src="img/logo-white.png" width="125px"></a>
        </div>
        <nav>
          <ul class="Menuitems">
            <li><a href="index.php">Home</a></li>
            <li><a href="h.php">Companies</a></li>
            <li><a href="blogs.php">Blogs</a></li>


          </ul>
        </nav>
        <a href="account.php"><label>Login</label> </a>
      </div>



      <div class="container22">
        <div class="oft3">
          <div class="panely">
            <div class="heading">

            </div>
            <div class="panelbody">
              <h3>Please Register Here:</h3>

              <form action="" method="post">
                <div class="formrow">
                  <div class="formgroup">
                    <div class="formgroup">
                      <label for="FirstNAme">First NAme</label>
                      <input type="text" class="form-control" id="inputNAme" placeholder="First Name">
                    </div>
                    <div class="formgroup">
                      <label for="SecondNAme">Second NAme</label>
                      <input type="text" class="form-control" id="inputNAme" placeholder="Second Name">
                    </div>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Ussername">
                  </div>
                  <div class="formgroup">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
                  </div>
                </div>
                <div class="formgroup">
                  <label for="inputPassword4">Confirm Password</label>
                  <input type="password" class="form-control" name="confirm_password" id="inputPassword" placeholder="Confirm Password">
                </div>
                <div class="form-roup">
                  <label for="email">email</label>
                  <input type="text" class="form-control" id="inputEmail" placeholder="email Addressr">
                </div>


            </div>



          </div>
        </div>
        <button type="submit" class="button1">Sign in</button>
        </form>
      </div>
      <a href="account.php" ">ALready have Account?</a>
    </div>
  </div>
  </div>

  </div>
</body>

 

<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
        <h3>Download Our App</h3>
        <p>Download App for Android and ios mobile phone</p>
        <div class="app-logo">
          <p>Download App for Android and ios mobile phone</p>
          <img src="img/play-store.png">
          <img src="img/app-store.png">
        </div>
      </div>
      <div class="footer-col-2">
        <img src="img/logo-white.png">

      </div>
      <div class="footer-col-3">
        <h3>Useful Links</h3>
        <ul>
          <li>Companies</li>
          <li>Blogs</li>
          <li>Login</li>
          <li>Account</li>
        </ul>
      </div>
      <div class="footer-col-4">
        <h3>Follow us</h3>
        <ul>
          <li>Facebook</li>
          <li>Twitter</li>
          <li>Instagram</li>
          <li>Youtube</li>
        </ul>
      </div>
    </div>
    <hr>
    <p class="copyright">Copyright 2022 - Usama Hussain 24878</p>
  </div>
</div>

</body>

</html>