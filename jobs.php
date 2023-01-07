<?php
session_start();
include_once 'db.php';
$result = mysqli_query($conn, "SELECT * FROM users");
$arrayresult = $result->fetch_all(MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Jobs - Usama hussain 24878</title>
  <link rel="stylesheet" href="css/website.css">
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
            <li><a href="h.php">Companies</a></li>
            <li><a href="blogs.php">Blogs</a></li>
          </ul>
        </nav>
        <a href="account.php"><label>Login</label> </a>
      </div>



      <!---------------------- main  ---------------------- -->

      <h2 class="title03">New Jobs</h2>

      <h2> </h2>


      <style>
        .table {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        .table td,
        .table th {
          border: 1px solid #ddd;
          padding: 8px;
        }


        .table th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #1174b9;
          color: white;
        }

        .But1 {
          color: #1174b9;
        }
      </style>
      </head>



</html>
<table class="table">
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
    <?php foreach ($arrayresult as $key => $abhjeet) { ?>
      <tr>
        <td><?php echo $key ?></td>
        <td>
          <h2 class="MISSION"><?php echo $abhjeet['job_title'] ?></h2>
        </td>
        <td><?php echo $abhjeet['Description'] ?></td>
        <td><?php echo $abhjeet['Last_Date'] ?></td>
        <td><a href="cvform.php" class="But1">Submit CV</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</body>

</html>

<div class="col-2">



</div>

</div>
<br>
<br>
<div class="row row-2">


  <div class="small-container3">


    <h2 class="title03">Why JobFinder?</h2>

    <div class="row">
      <div class="col-4">
        <a href=" "><img src="img/product-55.png"></a>


        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, dolor in.</P>
      </div>
      <div class="col-4">
        <a href=" "><img src="img/product-66.png"></a>


        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, dolor in.</P>
      </div>
      <div class="col-4">
        <a href=" "><img src="img/product-77.png"></a>


        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, dolor in.</P>
      </div>
      <div class="col-4">
        <a href=" "><img src="img/product-88.jpg"></a>

        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, dolor in.</P>
      </div>


      <br>
      <br>

      <br>
      <br>
      <br>








      <!-- last big pics-->

      <div class="row">
        <div class="col-2">
          <h1>50 million professionals on demand<br> great jobs!</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur<br> adipisicing elit. Explicabo, omnis possimus.<br>
          </p>

          <a href=" " class="button1">View</a>
        </div>
        <br>
        <div class="col-2">
          <img src="img/technology.png">
        </div>
        <br>
        <br>
      </div>
    </div>
  </div>

</div>
</body>


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