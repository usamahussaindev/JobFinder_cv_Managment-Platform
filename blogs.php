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


   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>





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


  <?php


  $db = mysqli_connect("localhost", "root", "", "operate_crud");





  if (isset($_POST['upload'])) {
  	$image = $_FILES['image']['name'];
 
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>


 
  

<body>
<h1 class="title03">Blogs</h1>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
        
      echo "</div>";
    }
  ?>





  <div class="row">
    <div class="leftcolumn">
      <div class="card">
       
      

      </div>



      </div>

  </div>
  </div>





<div class="footer">
  <div class="container">
    <div class="row">
   
      </div>
    </div>
    <hr>
    <p class="copyright">Copyright 2022 - Usama Hussain 24878</p>
  </div>
</div>

</body>

</html>