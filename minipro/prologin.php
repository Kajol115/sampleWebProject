<?php
$con = mysqli_connect("localhost","id4797096_kajol","kajol123","id4797096_project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="select username,password from student";
$result=mysqli_query($con,$sql);

$x=$_GET["uname"];
$y=$_GET["pswd"];
$flag=0;

if (mysqli_num_rows($result) > 0) 
{
   while($row = mysqli_fetch_row($result)) 
   {
        

       $username=$row[0];
       $password=$row[1];
       if($x==$username && $y==$password)
	{
		$flag=1;
		echo "success";
	               
		
	}
   }

   if($flag==0)
   {
	echo "fail";
   }

}

   
mysqli_close($con);

?>
