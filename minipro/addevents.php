<?php
$con = mysqli_connect("localhost","id4797096_kajol","kajol123","id4797096_project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$a=$_GET["t1"];
$b=$_GET["t2"];
$c=$_GET["t3"];
$d=$_GET["t4"];


$sql="  INSERT INTO event ( `ename`, `date`, `venue`, `description`) VALUES (' $a ', ' $b ', ' $c ', ' $d ');   ";
if (mysqli_query($con, $sql)) 
{
    echo "New event inserted  successfully";
} 
else 
{
    echo "Error:1 " . $sql . "<br>" . mysqli_error($con);
}



mysqli_close($con);

?>