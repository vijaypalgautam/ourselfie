<?php
$con = mysqli_connect('localhost','root','');

if (!$con) 
{
	echo "Server not connected";
}
else
{
	echo "Server connected";
}
echo "<br>";

$db=mysqli_select_db($con,'ourselfie');
if (!$db)
 {
	echo "Database not selected";
}
else
{
	echo "Database selected";
}
echo "<br>";

$fn=$_POST["fn"];
$mn=$_POST["mn"];
$ln=$_POST["ln"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$college=$_POST["college"];
$course=$_POST["course"];
$branch=$_POST["branch"];
$roll_no=$_POST["rollno"];
$mobile_no=$_POST["mobile"];
$password=$_POST["password"];






$s="select * from user where id = '$roll_no'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if ($num==1) 
{
	
	header('location:signup.php?Invalid=*Roll number already taken.<br>Click here for <a href="login.php">Log in</a>');

	
}
else
{
	$insert = "insert into user values('$fn','$mn','$ln','$email','$dob','$gender','$college','$course','$branch','$roll_no','$mobile_no','$password')";
	echo "<br>";

	$result2=mysqli_query($con,$insert);
	if (!$result2)
	{
	echo "Value not inserted";
	}
	else
	{
		header('location:image.php');
	}
	
}
?>