<?php
session_start();
include_once 'db.php';
$result = mysqli_query($conn, "SELECT * FROM cv_data");
$arrayresult = $result->fetch_all(MYSQLI_ASSOC);
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
      background: url("img/t555.png");
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





  <div class="oft-3">
    <div class="panely">
      <table class="table">
        <thead>
          <tr>
            <th>S.NO</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Qualification</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($arrayresult as $key => $subject) { ?>
            <tr>
              <td><?php echo $key ?></td>
              <td>
                <h2 class="MISSION"><?php echo $subject['firstname']?></h2>
              </td>
              <td><?php echo $subject['email'] ?></td>
              <td><?php echo $subject['mobile'] ?></td>
              <td><?php echo $subject['address'] ?></td>
              <td><?php echo $subject['qualification'] ?></td>
              <td><a href="" class="But1">Approved</a></td>
              <td><a href="deleteCV.php?id=<?php echo $subject["id"]; ?>" class="but1">Reject</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  </div>

</body>

</body>