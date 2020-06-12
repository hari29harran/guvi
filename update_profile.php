<?php
	session_start();
	if(isset($_SESSION['key']) && $_SESSION['key']==1)
    {
		include 'db.php';
		$email=$_POST['email'];
		$age=$_POST['age'];
		$mobile=$_POST['mobile_no'];
		$sql="UPDATE  user SET age='$age',mobile='$mobile' WHERE email='$email'";
		if(mysqli_query($con,$sql))
		{
			echo "Profile Updated Successfully";
		}
		else
		{
			echo mysqli_error($con);
		}
		mysqli_close($con);
	}
	else
	{
		header("location:index.php");
	}
?>