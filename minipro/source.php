
<?php
$host = "localhost";
$db_name = "kajol";
$username = "root";
$password = "";
 
try{
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
catch(PDOException $exception){
    //to handle connection error
    echo "Connection error: " . $exception->getMessage();
}


$query = "select pimg from product WHERE pid = ?"; 
$stmt = $con->prepare( $query );
 
// bind the id of the image you want to select
$stmt->bindParam(1, $_GET['id']);
$stmt->execute();
 
// to verify if a record is found
$num = $stmt->rowCount();
 
if( $num ){
    // if found
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // specify header with content type,
    // you can do header("Content-type: image/jpg"); for jpg,
    // header("Content-type: image/gif"); for gif, etc.
    header("Content-type: image/jpg");
    
    //display the image data
    echo $row['data'];
    exit;
}
else{
    //if no image found with the given id,
    //load/query your default image here
 header("HTTP/1.0 404 Not Found");

}



?>