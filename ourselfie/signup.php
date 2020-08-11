<?php 
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: time new roman, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email], input[type=number], input[type=select], input[type=date] {
  width: 100%;
  padding: 07px 10px;
  margin: 0px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color: #e4f7f7;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 5px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 48.5%;
}

button:hover {
  opacity: 0.8;
}






.container {
  padding: 16px;

  background-color: #4cd8ed;
}



/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #4cd8ed;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 90%; /* Could be more or less, depending on screen size */
}




/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}


marquee{
      width: 100%;
      color: #07205f;
      padding: 10px;
      background: #ffffff;
      font-size: 200%;
    }
    i{
      color: red;
    }


</style>
</head>


<body style="background-color:  #b2eaed">

<font size="05" color="#331d75" style="font-family: time new roman">
  <marquee behavior="alternate">
  <b><img src="surya logo.jpg" height="55px" width="50px">nly  for  Surya  communities.</b>
</marquee>
<form class="modal-content animate" action="signup_db.php" method="POST" enctype="multipart/form-data">  
</div>  

  <div class="container">
    <div><i style="font-color: red;">
      <?php
        if(@$_GET['Invalid']==true)
        {
        echo $_GET['Invalid'];
        }
        ?></i>
    </div>
      <label for="fn"><b>First name<i> *</i></b></label>
      <input type="text" name="fn" placeholder="Enter your first name" required><br> 
      <label for="mn"><b>Middle name</b></label>
      <input type="text" name="mn" placeholder="Enter your middle name" ><br>
      <label for="ln"><b>Last name</b></label>
      <input type="text" name="ln" placeholder="Enter your last name"><br>
      <label for="email"><b>Email ID.<i> *</i></b></label>
      <input type="email" name="email" placeholder="Enter your email ID" required><br>
      <label for="dob"><b>Date of birth<i> *</i></b></label>
      <input type="date" name="dob" placeholder="Enter your date of birth" required><br>
        <label for="gender"><b>Gender <i> *</i></b></label><br>
        <input type="radio" name="gender" value="male" required>Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="others">Other
      <br><br><label for="college"><b>College<i> *</i></b></label>
      <select name="college">
        <option>select</option>
        <option>CEST</option>
        <option>SSPEM</option>
        <option>SCBM</option>
      </select><br>
      <label for="course"><b>Course<i> *</i></b></label>
      <select name="course">
        <option>select</option>
        <option>B.Tech.</option>
        <option>Diploma</option>
        <option>BBA</option>
        <option>MBA</option>
      </select><br>
      <label for="branch"><b>Branch  </b></label>
      <select name="branch">
        <option>select</option>
        <option>CS</option>
        <option>CIVIL</option>
        <option>ME</option>
        <option>EC</option>
        <option>EN</option>
      </select><br><br>
      <label for="rollno"><b>Roll number<i> *</i></b></label>
      <input type="text" name="rollno" placeholder="Enter your Roll number" required><br>
      <label for="mobile"><b>Mobile number<i> *</i></b></label>
      <input type="number" name="mobile" placeholder="Enter your mobile number" required><br>
      <label for="password"><b>New password<i> *</i></b></label>
      <input type="password" name="password" placeholder="Enter your new password" required id="myInput">
      <input type="checkbox" onclick="myFunction()">Show Password<br>
      
      <button type="submit" name="submit">Sign up</button>
      <button type="reset" name="reset">Reset</button>
    
  </div>

</form>
</font>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>




