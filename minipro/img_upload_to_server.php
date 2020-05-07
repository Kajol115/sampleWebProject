<?php



// Create connection
$conn = mysqli_connect("localhost","id4797096_kajol","kajol","id4797096_project");
 
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 $DefaultId = 0;
 
 $username=$_POST['uname'];
 
 $ImageData = $_POST['image_path'];
 
 $ImageName = $_POST['image_name'];
 $sid=" select sid from student where username= '".$username."'  ";

 $GetOldIdSQL ="SELECT id FROM UploadImageToServer ORDER BY id ASC";
 
 $Query = mysqli_query($conn,$GetOldIdSQL);
 
 while($row = mysqli_fetch_array($Query)){
 
 $DefaultId = $row['id'];
 }
 
 $ImagePath = "images/$DefaultId.png";
 
 $ServerURL = "https://nsspro.000webhostapp.com/$ImagePath";
 
 $InsertSQL = "insert into UploadImageToServer (sid,image_path,image_name) values ('$sid','$ServerURL','$ImageName')";
 
 if(mysqli_query($conn, $InsertSQL)){

 file_put_contents($ImagePath,base64_decode($ImageData));

 echo "Your Image Has Been Uploaded.";
 }
 
 mysqli_close($conn);
 }else{
 echo "Not Uploaded";
 }

?>