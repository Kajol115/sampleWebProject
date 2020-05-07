<?php
 
 $conn = mysqli_connect("localhost","id4797096_kajol","kajol123","id4797096_project");
 
 $sql = "select image_path from UploadImageToServer where sid=1";
 
 $res = mysqli_query($conn,$sql);
 
 $result = array();
 
 while($row = mysqli_fetch_array($res)){
 array_push($result,array('url'=>$row['image_path']));
 }
 
 echo json_encode(array("result"=>$result));
 
 mysqli_close($conn);
 ?>