<?php

session_start();


if (isset($_SESSION['username'])) {
    header("location:AdminOption.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
        $err = "Please enter username + password";
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
    if (empty($err)) {
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;


        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {

                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;


                        header("location: AdminOption.php");
                    }
                }
            }
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>account-login</title>
    <link rel="stylesheet" href="css/website.css">
    <link rel="stylesheet" href="css/loginform.css">


    <style>
        body {
            background: url("img/white01.jpg");
            background-size: cover;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul class="Menuitems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="h.php">Companies</a></li>
                    <li><a href="blogs.php">Blogs</a></li>
                </ul>
            </nav>
            <a href="account.php">Account</a>
        </div>
    </div>
    </div>

    <div class="container2">
        <div class="oft-3">
            <div class="panely">
                <div class="heading">

                </div>
                <div class="panelbody">
                    <h1>Login Form</h1>
                    <label for="s"><img src="img/Profile.png" width="125px"></label>
                    <form action="" method="post">

                        <div class="form-group">
                            <label for="username"> username</label>
                            <input type="text" class="form-control" id="username" name="username" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" />
                        </div>

                        <button type="submit" class="button1">Submit</button>
                    </form>
                </div>

                <a href="createAccount.php">Registeration?</a>
            </div>
        </div>
    </div>

    </div>

    </div>




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