<?php
$name=$_POST['name'];
$pass=$_POST['pass'];

$c=mysqli_connect("localhost","root","","myadmin");

$q=mysqli_query($c,"select * from login where name='$name' and pass='$pass' ");


    if (empty($name))
	{
		echo "<script>alert('Please enter the data...')</script>";
	?>
	<script type="text/javascript">
		location.replace("cvs.php");
	</script>
	<?php
	
	}
	
	else if (empty($pass))
	{
		echo "<script>alert('Please enter the data...')</script>";
	 ?>
	<script type="text/javascript">
		location.replace("cvs.php");
	</script>
	<?php
	
	}
	


   else if($r=mysqli_fetch_array($q))
   {
   header("content-disposition:attachment;filename=cv/mj.pdf");

   fopen("cv/mj.pdf","r" );

   readfile("cv/mj.pdf");

  
  	
	}
	


else 
{
	 echo  "<script>alert('note success')</script>";
?>
<script type="text/javascript">
	location.replace("cvs.php");
</script>
	
<?php
	 
}
?>
