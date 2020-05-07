<?php
$con = mysqli_connect("localhost","id4797096_kajol","kajol123","id4797096_project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$x=$_GET["id"];
$y=$_GET["name"];
$z=$_GET["ename"];



       $sql="insert into prereg ('studid','sname','ename') values('$y','$z','$x')";

	   if (mysqli_query($con, $sql)) 
	   {
			echo "New record inserted into preregisteration successfully";
	   } 
		else 
		{
			echo "Error:1 " . $sql . "<br>" . mysqli_error($con);
		}
mysqli_close($con);

?>
