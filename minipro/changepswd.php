<?php
$con = mysqli_connect("localhost","id4797096_kajol","kajol123","id4797096_project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$z=$_GET["id"];
$x=$_GET["old"];
$y=$_GET["new"];
$flaf=0;
$sql="select password from student";
$result=mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) 
{
   while($row = mysqli_fetch_row($result)) 
   {
        

       $oldpsw=$row[0];
      
       if($x==$oldpsw)
	   {
			$flag=1;
			$sql="update table student set password=$y where fname=$z";
	   }
   }
   
    if($flag==0)
   {
	echo "fail";
   }

}
      
mysqli_close($con);

?>
