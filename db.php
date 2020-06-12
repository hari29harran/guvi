<?php
	$con=mysqli_connect("localhost","root","","guvi");
	if(!$con)
	{
		echo mysqli_error($con);
	}
?>