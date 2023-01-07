<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Jobs - Usama hussain 24878</title>

  <link rel="stylesheet" href="css/website.css">



</head>
<style>

        body{
    background: url("img/hol10.jpg");
    background-size: cover ;
}
</style>


<!--            navigation bar        -->


<body>

  <div class="container">
    <div class="navbar">
    
      <nav>
        <ul class="Menuitems">
          <li><a href="index.php">Home</a></li>
          <li><a href="h.php">Companies</a></li>
          <li><a href="jobs.php">Jobs</a></li>
        </ul>
      </nav>
      <a href="account.php">Account</a>


    </div>

  </div>
  </div>
  </div>








  <!---     Main      -->

  <h1 class="title03">Blogs</h1>




</style>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
 
  

</html>