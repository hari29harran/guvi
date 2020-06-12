<?php 
	session_start();
	//Including DB Connect File
	include 'db.php';
	//Getting data from form
	$un=$_POST['username'];
	$pass=$_POST['password'];
	//To Encrypt
	$pass1=md5($pass);
	//Sql Query
	$sql="SELECT * FROM user WHERE email='$un' AND password='$pass1'";
	if($res=mysqli_query($con,$sql))
	{
		if(mysqli_num_rows($res)==1)
		{
			$row=mysqli_fetch_array($res);
			$_SESSION['email']=$row['email'];
			$_SESSION['key']=1;
			echo "Logined";
		}
		else
		{
			echo "Invalid Credentials";
		}
	}
	else
	{
		echo mysqli_error($con);
	}
	mysqli_close($con);
 ?>