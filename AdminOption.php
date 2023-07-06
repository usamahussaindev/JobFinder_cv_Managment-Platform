<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: AdminOption.php");
}


?>
<div class="container mt-4">
  <h3 style="color:red;"><?php echo "Welcome Admin  :" . $_SESSION['username'] ?>! You can now use this website</h3>
</div>

<!DOCTYPE html>
<html lang="en">




<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">




  <title>FindJob WEbiste</title>
  <link rel="stylesheet" href="css/website.css">
  <link rel="stylesheet" href="css/loginform.css">


</head>



<style>

        body{
    background: url("img/white03.jpg");
    background-size: cover;
}
</style>


<body>
  <div class="header">

    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.php"><img src="img/logo.png" width="125px"></a>
        </div>
        <nav>
          <ul class="Menuitems">
            <li><a href="jobs.php">Jobs</a></li>
            <li><a href="h.php">Companies</a></li>
            <li><a href="blogs.php">blogs</a></li>
            <li> <a href="logout.php" class="button1">Log Out </a></li>
          </ul>
        </nav>
        <a href="account.php"><label>Login</label> </a>
      </div>

    </div>

  </div>

  <div>

    <h2 class="title03">Admin Portal</h2>
  </div>


  <!----------login Form------------>

  <div class="container2">
    <h2>Menu</h2>
    <form id="option-form">
      <a href="CreateJobs.php" class="button1">Post Jobs </a>

      <p>
        <a href="registeredP.php" class="button1">Applications</a>
      <p>
        <a href="cblogs.php" class="button1">Post Blogs </a>
      </p>


    </form>

  </div>
  </div>
</body>

</html>
