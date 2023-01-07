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
<style>
  body {
    background: url("img/white02.jpg");
    background-size: cover;
  }
</style>
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
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
        <a href="account.php"><label>Login</label> </a>
      </div>



    </div>
    <br>
    <br>

    <body>
      <div class="container2">
        <h2> Fill the Form </h2>
        <div class="panelbody ">
          <div class="form-group">
            <form action="create_submit.php" method="post">

              <div class="form-group">
                <label for="email">JOB Title</label>
                <input type="text" class="form-control" name="job_title" />
              </div>
              <div class="form-group">
                <label for="email">Description:</label>
                <input type="text" class="form-control" name="Description" />
              </div>
              <div class="form-group">
                <label for="email"> Last Date</label>
                <input type="date" class="form-control" name="Last_Date" />
              </div>
              <button type="submit" class="button1">Post</button>
            </form>
          </div>
        </div>
      </div>
    </body>


    <!-------footer------->


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