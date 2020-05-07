<html>
<head>
</head>
<body>

<center>
<div class="container-fluid text-center bg-grey">
  <h1>MOST ACCESSIBLE FINE JEWELLERY-NECKPIECE!!!</h1>
<form method="post" action="http://localhost/minipro/cart1.php">
<?php

$con = mysqli_connect("localhost","root","","kajol");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }




$res=mysqli_query($con,"select pname,price from product");
$row=mysqli_fetch_array($res);

?>

<div class="container-fluid text-center bg-grey">
 
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="p7.jpg" ></br>
        <button type="button" class="btn btn-default btn-sm" value="7"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart </button></br>
	<p><strong>NECKPIECE-1</strong></p></br>
	<p><strong>PRICE: 9500</strong></p>
	
      </div>
    </div>

    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="p8.jpg"></br>
        <button type="button" class="btn btn-default btn-sm" value="8"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart </button></br>
	<p><strong>NECKPIECE-2</strong></p></br>
	<p><strong>PRICE: 7500</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="p9.jpg"></br>
          <button type="button" class="btn btn-default btn-sm" value="9"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart </button></br>
	<p><strong>NECKPIECE-3</strong></p></br>
	<p><strong>PRICE: 6000</strong></p>
      </div>
    </div>
</div>

</form>
</body>
</html>