<html>
<head>
</head>
<body>

<center>
<div class="container-fluid text-center bg-grey">
  <h1>MOST ACCESSIBLE FINE JEWELLERY-EARINGS!!!</h1>
<form method="post" action="http://localhost/minipro/cart.php">
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
        <img src="p1.jpg" ></br>
        <button type="button" class="btn btn-default btn-sm"  name="action" value="1"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart </button></br>
	<p><strong>EARINGS-1</strong></p></br>
	<p><strong>PRICE: 2000</strong></p>
	
      </div>
    </div>

    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="p2.jpg"></br>
        <button type="button" class="btn btn-default btn-sm" name="action" value="2"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart </button></br>
	<p><strong>EARINGS-2</strong></p></br>
	<p><strong>PRICE: 2500</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="p3.jpg"></br>
          <button type="button" class="btn btn-default btn-sm" name="action" value="3"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart </button></br>
	<p><strong>EARINGS-3</strong></p></br>
	<p><strong>PRICE: 3000</strong></p>
      </div>
    </div>
</div>
</form>

</body>
</html>