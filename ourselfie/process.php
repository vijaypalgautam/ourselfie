<?php

session_start();
require_once('connection.php');
	if(isset($_POST['login']))
	{
		if (empty($_POST['id']) || empty($_POST['password']))
		{
			header("location:login.php?Empty=Please fill in the blanks");

		}
		else
		{
			$query="select * from user where id='".$_POST['id']."' and password='".$_POST['password']."'";
			$result=mysqli_query($con,$query);

			if(mysqli_fetch_assoc($result)) 
			{
				$_SESSION['USER']=$_POST['id'];
				header("location:welcome.php");
			}
			else
			{
				header("location: login.php?Invalid=User ID and password not matched.<br><i>Click here for <a href='signup.php'>Sign up</a></i> ");

			}
		}
	}
	else
	{
		echo "not working Now";
	}

?>