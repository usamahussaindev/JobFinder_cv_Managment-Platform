<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Jobs - Usama hussain 24878</title>
  <link rel="stylesheet" href="css/website.css">
  <link rel="stylesheet" href="css/loginform.css">
</head>




<!-- navigation bar code-------------------------->

<body>
  <div class="header">

    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.php"><img src="img/logo.png" width="125px"></a>
        </div>
        <nav>
          <ul class="Menuitems">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Companies</a></li>
            <li><a href="index.php">Contact</a></li>


          </ul>
        </nav>
        <a href="account.php"><label>Login</label> </a>
      </div>






      <?php
      session_start();
      include_once 'db.php';
      $result = mysqli_query($conn, "SELECT * FROM users");
      $arrayresult = $result->fetch_all(MYSQLI_ASSOC);
      ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

      </head>

      <body>
        <div class="container">
          <h2>Insert New Jobs</h2>
          <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
            <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;">
              <?php echo $_SESSION['success_message']; ?>
            </div>
          <?php
            unset($_SESSION['success_message']);
          }
          ?>
          <a href="UpdateJob.php" class="button1">Create</a>
          <table class="tyled-table">
            <thead>
              <tr>
                <th>S.NO</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Last Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($arrayresult as $key => $subject) { ?>
                <tr>
                  <td><?php echo $key ?></td>
                  <td><?php echo $subject['job_title'] ?></td>
                  <td><?php echo $subject['Description'] ?></td>
                  <td><?php echo $subject['Last_Date'] ?></td>
                  <td><a href="edit.php?id=<?php echo $subject["id"]; ?>" class="but1">Edit</a></td>
                  <td><a href="delete.php?id=<?php echo $subject["id"]; ?>" class="but1">Delete Account</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>



      </body>

    </div>


  </div>

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