<?php
//$con = mysqli_connect("localhost","id4797096_kajol","kajol123","id4797096_project");
$con = mysqli_connect('localhost','root', '', 'pro');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//$a=$_GET["t1"];
//$b=$_GET["t2"];
//$c=$_GET["t3"];
$a="blood donation";
$b="parekh";
$c="state-level";

$eid="select * from event where ename=$a";
$r1=mysqli_query($con,$eid);
echo $eid;
 $row_cnt = mysqli_num_rows($r1);
echo $row_cnt;

if(mysqli_num_rows($r1)>0)
{
	echo "here";
	while ($row1=mysqli_fetch_row($r1))
	{
		$e=$row1[0];
		$sid="select sid from student where lname=$b";
		echo $sid;
		$r2=mysqli_query($con,$sid);
		if(mysqli_num_rows($r2)>0)
		{
			while ($row2=mysqli_fetch_row($r2))
			{
				$s=$row2[0];
				$sql="  INSERT INTO event ( `ename`, `date`, `venue`, `description`) VALUES (' $a ', ' $b ', ' $c ', ' $d ');   ";
				if (mysqli_query($con, $sql)) 
				{
  					  echo "New event inserted  successfully";
				} 
				else 
				{
    					echo "Error:1 " . $sql . "<br>" . mysqli_error($con);
				}
			}
		}
	}
}





mysqli_close($con);

?>