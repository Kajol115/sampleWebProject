<?php


$conn = mysqli_connect('localhost','root', '', 'pro');

if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}
else
{
	
	
	$na=$_GET["ename"];
	$da=$_GET["date"];
	$va=$_GET["venue"];
	$desc=$_GET["desc"];




  
	
	echo $na;
  
	$sql="update event set ename='".$na."', date='".$da."' , venue='".$va."' , description='".$desc."'  where eid='".$id."' ";
	echo $sql;
	if(mysqli_query($conn,$sql))
			{
				echo "success";
				include("proupdevent.php");
				
				
			}
			else
			{
				echo "Error updating record.";
			}
	
	mysqli_close($conn); 
	
?>