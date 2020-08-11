
<?php
include 'navbar.php';

include 'connection.php';

$fn = $_POST['fn'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$roll_no = $_POST['roll_no'];
$mobile_no = $_POST['mobile_no'];




error_reporting(0);
$query = "select * from user where id=$roll_no";
$data = mysqli_query($con,$query);


 $result = mysqli_fetch_assoc($data);

 $result['name']." ".$result['email']." ".$result['dob']." ".$result['mobile_no']." ".$result['id'];
     
         
if ($fn==$result['name'] && $email==$result['email'] && $dob==$result['dob'] && $roll_no==$result['id'] && $mobile_no == $result['mobile_no']) 
{
	?>

	Your passwor is:-

	<?php
        echo $result['password'];


?>
 <br>Click here for <a href='login.php'>Log in</a>
<?php
}





else
{
        echo "Data is not matched";
}
    
?>
