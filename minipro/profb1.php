<?php
//$con = mysqli_connect("localhost","id4797096_kajol","kajol123","id4797096_project");
$con = mysqli_connect("localhost","root","","pro");

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//$c=$_GET["uname"];
$c="purvi";
$sql1= "select sid from student where username=' " .$c. " ' ";
//echo $sql1;
$result=mysqli_query($con,$sql1);

if(mysqli_num_rows($result) > 0) 
{
	echo "Error: " . $sql . "<br>" . mysqli_error($con);
   while($row = mysqli_fetch_assoc($result)) 
   {
		echo "Error:11 " . $sql . "<br>" . mysqli_error($con);
		$id=row('sid');
		$r="blood donation";
		$sql="  update feedback set sid=".$id. " where ename=' " .$r. " '  ";
		echo $sql1;
			if (mysqli_query($con, $sql)) 
			{
				echo "sucess";
			} 
			else 
			{
				echo "Error:1 " . $sql . "<br>" . mysqli_error($con);
			}
   }
}

mysqli_close($con);

?>