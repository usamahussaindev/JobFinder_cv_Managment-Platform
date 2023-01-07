
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Jobs - Usama hussain 24878</title>

  <link rel="stylesheet" href="css/website.css">
  <link rel="stylesheet" href="css/stylesheet.css">

  <link rel="stylesheet" href="css/cv-form.css">

  <style>
   *{box-sizing: border-box;
}
body{ background: url("img/white01.jpg");
        background-size: cover;

}

 
textarea{
    width:45%;
    padding: 12px;
    border: 1px solid rgb(168, 166, 166);
    border-radius: 4px;
    resize: vertical;

}
h1{
   
   
    text-align: center;
    text-decoration: underline;
}
label{
    padding: 12px 12px 12px 0;
    display: inline-block;
}

.container{
    border-radius: 5px;
    background-color:#f2f2f2;
    padding: 20px;
}
.col-10{
    float: left;
    width:10%;
    margin-top: 6px;
}
.col-90{
    float: left;
    width: 90%;
    margin-top: 6px;
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


          </ul>
        </nav>
        <a href="account.php"><label>Login</label> </a>
      </div>




    
   
        <h1>JOB APPLICATION (CV) Form</h1>
        <div class="container">
        <form action="submt_cv.php" method="post">
            <div class="row">
                <div class="col-10">
                    <label for="fname">First Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="fname" name="firstname" placeholder="Enter your first name">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="lname">Last Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="lname" name="lastname" placeholder="Enter your last name">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="email">Email:</label>
                </div>
                <div class="col-90">
                    <input type="email" id="email" name="email" placeholder="it should contain @,.">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="mobile">Mobile:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="mobile" name="mobile" placeholder="only 10 digits are allowed">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="gender" required>Gender:</label>
                </div>
                <div class="col-90">
                    <input type="radio" id="male" name="gender" value="male"/>Male
                    <input type="radio" id="female" name="gender" value="female"/>Female
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="dob">Date Of Birth:</label>
                </div>
                <div class="col-90">
                    <input type="Date" id="dob" name="dob">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="city">City:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="city" name="city" maxlength="10">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="pincode">Area PIN:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="pin" name="pin" maxlength="6">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="state">State:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="state" name="state">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="qualification" required >Qualification:</label>
                </div>
                <div class="col-90">
                    <select name="qualification" id="qualification">
                        <option value=" ">Select Qualification:</option>
                        <option value="Graduation">Graduation</option>
                        <option value="Bs">Bs.</option>
                        <option value="Msc">Msc.</option>
                        <option value="MS">MS</option>
                        <option value="PHD">PHD</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="specialization">Specialization:</label>
                </div>
                <div class="col-90">
                    <input type="checkbox"  name="specialization" value="Computer Science">Computer Science<br/>
                    <input type="checkbox" name="specialization" value="Information Technology">Information Technology<br/>
                    <input type="checkbox"  name="specialization" value="Computer Architecture">Computer Architecture<br/>
                    <input type="checkbox"  name="specialization" value="Tele Communication">Tele Communication<br/>
                </div>
            </div>
            <div class="row">
                
            </div>
            <div >
                <input class="button1"type="submit" value="SUbmit CV">
            </div>  
            </form>
        </div>  
</div>
</div>
</div>
</body>


  <div class="footer">
   
     <div class="container22">
        <div class="row">
          copy right 2022 - Usama Hussain 24878</p>
        </div>
      </div>
    </center>
    </div>
  </div>
  </div>


</html>