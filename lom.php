<?php
	$uid=$_POST['name'];
	$pass=$_POST['pass'];

	$con=mysqli_connect("localhost","root","","milan");

	$q=mysqli_query($con,"select * from lc where name='$uid' and pass='$pass'");

	if(empty($uid))
	{
		echo "<script>alert('Plese enter the data..')</script>";
	
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
	else if ($r=mysqli_fetch_array($q)) 
	{
		echo "<script>alert('Not Success..')</script>";
	
    ?>
	<script type="text/javascript">
		location.replace("index.html");
	</script>
	<?php
	
	}
	
	else
	{
		echo "<script>alert('Not Success..')</script>";
	
    ?>
	<script type="text/javascript">
		location.replace("lom.html");
	</script>
	<?php
	
	}

?>

