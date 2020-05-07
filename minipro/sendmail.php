<?php

$uname = $_POST['uname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "kajalparekh12324@gmail.com";
$subject = "Contact-us form from mini project";
$message = $message."\n Name: ".$uname."\n Mobile: ".$mobile."\n Email: ".$email;


if( mail($to,$subject,$message))
{
	echo "Thank you for contacting us";
}
else
{
	echo "Try again";
}



?>


