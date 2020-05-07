<?php
//$con = mysqli_connect("localhost","id4797096_kajol","kajol","id4797096_project");

$con = mysqli_connect("localhost","root","","pro");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  



$sql="select ename from event";
$result=mysqli_query($con,$sql);
$data=array();


if (mysqli_num_rows($result) > 0) 
{
   while($row = mysqli_fetch_assoc($result)) 
   {
        $data[]=$row;
		
   }
echo json_encode($data);
}



   
mysqli_close($con);

?>
