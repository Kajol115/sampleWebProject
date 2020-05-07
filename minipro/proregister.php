<?php
$con = mysqli_connect("localhost","id4797096_kajol","kajol123","id4797096_project");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$a=$_GET["fname"];
$b=$_GET["lname"];
$c=$_GET["age"];
$d=$_GET["gender"];
$e=$_GET["add"];
$f=$_GET["email"];
$g=$_GET["contact"];
$h=$_GET["bg"];
$i=$_GET["bd"];
$j=$_GET["pd"];
$k=$_GET["ba"];
$l=$_GET["ac"];
$m=$_GET["vid"];
$n=$_GET["uname"];
$o=$_GET["pswd"];

$sql="  INSERT INTO student ( `fname`, `lname`, `age`, `gender`, `address`, `email`, `contact`, `bloodgroup`, `blooddonor`, 
`plateletdonor`, `bankacc`, `aadharcard`, `voterid`, `username`, `password`) VALUES (' $a ', ' $b ', ' $c ', ' $d ', '$e',
 ' $f', ' $g  ', '$h ','$i ', ' $j ', ' $k ', ' $l ', ' $m ',' $n ', '$o ');   ";
if (mysqli_query($con, $sql)) 
{
    echo "New record inserted into register successfully";
} 
else 
{
    echo "Error:1 " . $sql . "<br>" . mysqli_error($con);
}



mysqli_close($con);

?>
