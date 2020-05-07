<?php
//$con = mysqli_connect("localhost","id4797096_kajol","kajol","id4797096_project");
$con = mysqli_connect("localhost","root","","pro");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


//$x=$_GET["pos"];

$sql="select description from event where eid=1";
$result=mysqli_query($con,$sql);




if (mysqli_num_rows($result) > 0) 
{
   while($row = mysqli_fetch_row($result)) 
   {

       echo $row[0];
   }
       

}
else
{
	echo "fail";
}

   
mysqli_close($con);

?>