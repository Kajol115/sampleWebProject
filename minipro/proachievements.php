<?php
//$con = mysqli_connect("localhost","id4797096_kajol","kajol123","id4797096_project");
$con = mysqli_connect("localhost","root","","pro");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$sql="select achievement.level,student.fname,student.lname, event.ename from achievement join student on achievement.sid=student.sid join event on achievement.eid=event.eid";

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
