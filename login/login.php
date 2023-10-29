<?php
$name=$_POST['name'];
$pass=$_POST['pass'];

$c=mysqli_connect("localhost","root","","myadmin");

$q=mysqli_query($c,"select * from login where name='$name' and pass='$pass' ");

if($r=mysqli_fetch_array($q))
{
	echo  "<script>alert('Login Success')</script>";

?>
<script type="text/javascript">
	location.replace("index.html");
</script>
	
<?php
}
else 
{
	 echo  "<script>alert('note success')</script>";
?>
<script type="text/javascript">
	location.replace("jj.html");
</script>
	
<?php
	 
}
?>