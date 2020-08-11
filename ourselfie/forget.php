<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>


        <title>login</title>


        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: time new roman, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=date],input[type=email],input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  background-color: #4cd8ed;
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
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
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
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

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

        <style type="text/css">
                b{
                        font-family: "time new roman"; 
                }

                h3{
                        font-family: "time new roman";
                }
                td{
                        font-family: "time new roman"; 
                }
                
        </style>
</head>

<font size="05" color="#331d75">


<body bgcolor="#b2eaed" style="background-color:  #b2eaed">
</br>
<form class="modal-content animate" action="forget_result.php" method="post"> 


        <div class="container">
      <label for="fn"><b>First name</b></label>
      <input type="text" placeholder="Enter First name" name="fn" required>
      <label for="dob"><b>Date of birth</b></label>
      <input type="date"  name="dob" required>
      <label for="email"><b>Email ID.</b></label>
      <input type="email" placeholder="Enter email ID" name="email" required>
      <label for="roll_no"><b>Roll number</b></label>
      <input type="text" placeholder="Enter Roll number" name="roll_no" required>

      <label for="mobile_no"><b>Mobile number</b></label>
      <input type="number" placeholder="Enter Mobile number" name="mobile_no" required>
        
      <button type="submit" name="login">Submit</button>
      
   










<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>





</form>
</body>
</html>

