<?php

$con = mysqli_connect('localhost','root','','ourselfie');
if (!$con) 
{
	echo "Server not connected";
}
else
{
	echo "Server connected";
}

$id = $_POST['id'];


$filename = $_FILES["image"]["name"];
$tmpname = $_FILES["image"]["tmp_name"];
$fol = "image/".$filename;
move_uploaded_file($tmpname, $fol);

$result = "insert into articles values('$id','$fol')";
$result2=mysqli_query($con, $result);

if (!$result2) 
{
	echo "image not inserted";
}
else
{
	echo "image inserted";
	header("location:login.php");
}





?>