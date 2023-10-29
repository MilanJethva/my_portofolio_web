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
		echo "not matched";
	}

	else if (empty($nm))
	{
		echo "<script>alert('Please enter the data...')</script>";

	?>
	<script type="text/javascript">
		location.replace("lom.html");
	</script>
	<?php
	
	}
	else if (empty($mobile))
	{
		echo "<script>alert('Please enter the data...')</script>";
	?>
	<script type="text/javascript">
		location.replace("lom.html");
	</script>
	<?php
	
	}
	else if (empty($email))
	{
		echo "<script>alert('Please enter the data...')</script>";
	?>
	<script type="text/javascript">
		location.replace("lom.html");
	</script>
	<?php
	
	}
	else if (empty($pass))
	{
		echo "<script>alert('Please enter the data...')</script>";
	?>
	<script type="text/javascript">
		location.replace("lom.html");
	</script>
	<?php
	
	}
	else if (empty($vpass))
	{
		echo "<script>alert('Please enter the data...')</script>";
	?>
	<script type="text/javascript">
		location.replace("lom.html");
	</script>
	<?php
	
	}

	else
	{
		mysqli_query($c,"insert into lc(name,mobile,email,pass,cpass)values('$nm','$mobile','$email','$pass','$vpass')");

		echo "<script>alert('Succes...')</script>";
	}
}
?>
<script type="text/javascript">
		location.replace("index.html");
</script>
