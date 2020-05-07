
<?php

$con = mysqli_connect("localhost","root","","kajol");


// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$gender= $_POST["gender"];
$age = $_POST["age"];
$address = $_POST["add"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$username = $_POST["uname"];
$password = $_POST["pswd"];


$sql = "insert into customer (fname,lname,gender,age,address,email,contact,uname,password)
values('$firstname','$lastname ','$gender','$age' ,'$address', '$email' ,'$contact','$username','$password')";

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