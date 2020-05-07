<?php
$con = mysqli_connect("localhost","root","","kajol");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        die($problem);
    }
    return $data;
}

$sql="select uname,password from customer";
$result=mysqli_query($con,$sql);

$x=check_input($_POST["uname"], "PLEASE ENTER YOUR USERNAME");
$y=check_input($_POST["pswd"], "PLEASE ENTER YOUR PASSWORD");
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
		echo "Login successfull";
	                include("homepage.html");
		
	}
   }

   if($flag==0)
   {
	echo "Invalid username or password...Try again";
   }

}

   
mysqli_close($con);

?>
