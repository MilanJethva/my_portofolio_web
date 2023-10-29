<?php
	$uid=$_POST['uid'];
	$pass=$_POST['pass'];

	$con=mysqli_connect("localhost","root","","milan");

	$q=mysqli_query($con,"select * from lc where name='$uid' and pass='$pass'");

	if($r=mysqli_fetch_array($q))
	{
		echo "success";
	}
	else
	{
		echo "not";
	}

?>