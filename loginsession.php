<?php
	// ob_start();
	session_start();

	include("connection.php");

	$username=$_POST['username'];
	$password=$_POST['password'];
	$q="select * from `user` where  `Userid`='".$username."' and  `Password`='".$password."'";
	$res=mysqli_query($con, $q);
	if(mysqli_num_rows($res)>0)
	{
	  $_SESSION['username']=$username;
	  if($username==='admin')
	  {
	  	header('location:admin.php');
	  }
	  else
		echo "<script>window.location='reservation.php';</script>";
	}
	else
	{
		$message="Incorrect username/password found!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.location='login.php';</script>";
		echo"<script>close()</script>";
	}

?>
