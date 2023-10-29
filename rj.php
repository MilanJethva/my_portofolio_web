<?php
if(isset($_POST['btn']))
{
	$c=mysqli_connect("localhost","root","","milan");

	$nm=$_POST['nm'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$vpass=$_POST['vpass'];
	

	if($pass!=$vpass)
	{
		echo "<script>alert('password not mathed')</script>";

	
	}
	else
	{
		mysqli_query($c,"insert into lc(name,mobile,email,pass,cpass) values('$nm','$mobile','$email','$pass','$vpass')");
		

		echo "<script>alert('success...')</script>";

		
	}
}
?>