</<?php
//$con = mysqli_connect("localhost","id4797096_kajol","kajol123","id4797096_project");
$con = mysqli_connect("localhost","root","","pro");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//$a=$_GET["ename"];
//$b=$_GET["fb"];
//$c=$_GET["uname"];

$a="tree plantation";
$b="good";
$c="kajol";

$sql1= "select sid from student where username=$c ";
echo $sql1;
$result=mysqli_query($con,$sql1);
echo $result;

if(mysqli_num_rows($result) >0) 
{
   while($row = mysqli_fetch_assoc($result)) 
   {
		$id=row('sid');
		if($id!=null)
		{


			$sql="  insert into feedback('sid','ename','feedback') values(' $id ',' $a ',' $b ')   ";
			if (mysqli_query($con, $sql)) 
			{
				echo "sucess";
			} 
			else 
			{
				echo "Error:1 " . $sql . "<br>" . mysqli_error($con);
			}
		}
   

		else
		{
			echo "second if loop failed";
		}
   }
}


mysqli_close($con);

?>
