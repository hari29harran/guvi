<?php
	include 'db.php';
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$mobile=$_POST['mobile_no'];
	$sql="INSERT INTO user VALUES('$firstname','$lastname','$gender','$dob','$age','$email','$password','$mobile')";
	if(mysqli_query($con,$sql))
	{
		echo "Login Created Successfully";
	}
	else
	{
		echo mysqli_error($con);
	}
	mysqli_close($con);
?>