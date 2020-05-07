<?php
$server="localhost";
$user="root";
$pass="";
$db="kajol";

$conn=mysqli_connect($server,$user,$pass,$db);
if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}
else
	echo"connection successful <br>";
	mysqli_select_db($conn,$db);
	echo"database selected<br>";
	
	$n=$_GET["name"];
	$p=$_GET["price"];
	
	$sql="delete from cart where pname='".$n."'";
	if(mysqli_query($conn,$sql))
			{
				include("cart.php");
				
			}
			else
			{
				echo"Error deleting recode.";
			}
	
	mysqli_close($conn); 
	
?>


