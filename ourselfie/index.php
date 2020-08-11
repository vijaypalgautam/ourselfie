<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  <style type="text/css">
    marquee{
      width: 100%;
      color: #07205f;
      background: #ffffff;
      font-size: 300%;
    }

  </style>
</head>
<font size="04" color="#331d75">
<body style="background-color: #b2eaed">
  <marquee behavior="alternate">MADE IN INDIA</marquee>
<div class="container" style="display: flex;">
  <div class="row">
    
    <div class="col-md-6">
     
      <form action="" method="post"></br>
        <table  align="center">
          <tr>
            <td>
            <h2>Login here</h2>
            <a href="Login.php">
	         <input type="button" value="Log in" style="background-color: skyblue; border-radius: 100px; color: #fff; cursor: pointer; font-size: 20px; font-weight: bold; line-height: 20px; padding: 15px 100px;">
            </a>


            
          </td>
            </tr>
            <tr>
              <td><br>
	             <hr style="height: 3px;" width="100%">
             </td>
            </tr>
            <tr>
              <td>
                <h3>Create a new account:</h3>
              
	         
          <a href="signup.php">
	         <input type="button" value="Sign up" style="background-color: skyblue; border-radius: 100px; color: #fff; cursor: pointer; font-size: 20px; font-weight: bold; line-height: 20px; padding: 15px 100px;">
          </a>
        </td>
        </tr>
        </table>
      </form>
    </div>
    <div class="col-md-6"></br>
      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
  
          <!-- The slideshow -->
        <div class="carousel-inner">
         <div class="carousel-item active">
           <img src="IMG0.jpg" alt="Vijay pal gautam" height="100%" width="100%" align="center">
          </div>
          <div class="carousel-item">
           <img src="IMG1.jpg" alt="VIJAY AND ASHISH" height="100%" width="100%">
          </div>
          <div class="carousel-item">
            <img src="IMG3.jpg" alt="GROUP IMAGE" height="100%" width="100%">
          </div>
         </div>
  
            <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
      </div>
    </div>
  </div>
</div>



</body>
</html>