<?php
if(isset($_POST['btn']))
{
	$c=mysqli_connect("localhost","root","","myadmin");

	$nm=$_POST['nm'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$vpass=$_POST['vpass'];
	

	if($pass!=$vpass)
	{
		echo "<script>alert('password not mathed')</script>";

	?>
	<script type="text/javascript">
		location.replace("lo.html");
	</script>
	<?php
	}
	else
	{
		mysqli_query($c,"insert into login(name,mobile,email,pass,vpass) values('$nm','$mobile','$email','$pass','$vpass')");
		

		echo "<script>alert('success...')</script>";

		?>
		<script type="text/javascript">
			location.replace("index.html");
		</script>

		<?php

	}
}
?>