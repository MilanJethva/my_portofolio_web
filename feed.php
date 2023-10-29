<?php
if(isset($_POST['btn']))
{
	$c=mysqli_connect("localhost","root","","myadmin");

	$nm=$_POST['nm'];
	$email=$_POST['email'];
	$sub=$_POST['sub'];
	$msg=$_POST['msg'];
	
	

	mysqli_query($c,"insert into feedback(name,email,sub,msg) values('$nm','$email','$sub','$msg')");
	
	echo "<script>alert('success..')</script>";
}

?>
<script type="text/javascript">
	location.replace("index.html");
</script>
