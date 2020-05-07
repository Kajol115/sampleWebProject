<?php
$con = mysqli_connect("localhost","id4797096_kajol","kajol","id4797096_project");
//$con = mysqli_connect("localhost","root","","pro");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$sql=" select event.date, event.ename from diary join event on diary.eid=event.eid where sid=1";




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