<?php
//$con = mysqli_connect("localhost","root","","pro");
$con = mysqli_connect("localhost","id4797096_kajol","kajol","id4797096_project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$x=$_GET["uname"];
$a=$_GET["pos"];

$sql1="select *  from student where username='$x'";
$result1=mysqli_query($con,$sql1);


//$sql="select ename from event";
//$result=mysqli_query($con,$sql);
//$data=array();


if (mysqli_num_rows($result1) > 0) 
{
	while($row1= mysqli_fetch_assoc($result1)) 
   {
	   echo "success"
        $y=$row1[0];
		$sql="insert into atteandance ('sid','ename') values(' $y ', ' $a ')";
		$result=mysqli_query($con,$sql);
		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				echo "Registered for event successfully ";
		
			}
		
		
		}
		else
		{
			echo "inner condition fail";
		}

	}
}
else
{
	echo "fail";
}
 

   
mysqli_close($con);

?>
