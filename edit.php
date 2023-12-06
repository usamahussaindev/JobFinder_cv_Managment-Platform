<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>update - zain ul abadeen</title>

  <link rel="stylesheet" href="css/website.css">


  <link rel="stylesheet" href="css/cv-form.css">

</head>
<!---navigation bR ---------------------------------->


<body>

  <div class="container">
    <div class="navbar">
      <div class="logo">
        <a href="index.php"><img src="img/logo.png" width="125px"></a>
      </div>
      <nav>
        <ul id="abc" class="Menuitems">
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Companies</a></li>
          <li><a href="index.php">Contact</a></li>
        </ul>
      </nav>
      <a href="account.php">Account</a>


    </div>

  </div>
  </div>

  </div>
  <br>
  <br>


  <div class="container3">
    <form action="update.php" method="post">
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
      <div class="form-group">
        <label for="email">JOB TITLE:</label>
        <input type="text" class="form-control" name="job_title" id="job_title" value="<?php echo $row['job_title'] ?>">
      </div>
      <div class="form-group">
        <label for="Description">Description:</label>
        <input type="text" class="form-control" name="Description" id="Description" value="<?php echo $row['Description'] ?>">
      </div>
      <div class="form-group">
        <label for="email">Last Date:</label>
        <input type="date" class="form-control" name="Last_Date" id="Last_Date" value="<?php echo $row['Last_Date'] ?>">
      </div>
      <button type="submit" class="button1">Submit</button>
    </form>
  </div>
</body>

<!--footer part-->

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