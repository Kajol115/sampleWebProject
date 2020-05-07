<?php 
//$conn = mysqli_connect('localhost','root', '', 'pro');
$conn= mysqli_connect("localhost","id4797096_kajol","kajol123","id4797096_project");
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
	
	session_start();
	session_destroy();
	echo "<script type='text/javascript'>location.href='adminlogin.html';</script>  ";
	
mysqli_close(conn);
?>
