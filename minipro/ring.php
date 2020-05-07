<html>
<head>
</head>
<body>

 <div class="jumbotron text-center">
    <h1>WOMEN'S FASHION JEWELLERY.</h1>      
    <p>DESIGNED BY US, LOVED BY ALL.</p>
  </div>

    
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Women's Fashion Jewellery</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="http://localhost/minipro/ring.php">Products</a></li>
     <!-- <li><a href="http://localhost/minipro/earing.php">EARINGS</a></li>
     // <li><a href="http://localhost/minipro/neckpiece.php">NECKPIECE</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="file:///C:/wamp/www/minipro/contactform.html"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
      <li><a href="http://localhost/minipro/cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      <li><a href="file:///C:/wamp/www/minipro/register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="file:///C:/wamp/www/minipro/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<center>
<div class="container-fluid text-center bg-grey">
  <h1>MOST ACCESSIBLE FINE JEWELLERY-RINGS!!!</h1>

<?php

$con = mysqli_connect("localhost","root","","kajol");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo "Connected Successfull";

$n=$_POST['p'];
$pr=$_POST['pr'];
$btn=$_POST['b1'];
$btn1="Add to cart";
if($btn==$btn1)
{


$res="insert into cart(pname,pprice) values('".$n."','".$pr."')";
if($con->query($res)==TRUE)
{
	echo "ADDED TO CART";
}
else
{
	echo "NOT ADDED";
}
}

?>


<div class="container-fluid text-center bg-grey">
 
  <div class="row text-center">
<form method="post" action="<?php $_PHP_SELF?>">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="p4.jpg" ></br>

	<input type="hidden" name="p" value="RING-1">
	<input type="hidden" name="pr" value="8000">
        <input type="submit" class="btn btn-default btn-sm" name="b1" value="Add to cart"><span class="glyphicon glyphicon-shopping-cart"></span> </br>
	<p><strong>RING-1</strong></p></br>
	<p><strong>PRICE: 8000</strong></p>
	
      </div>
    </div>
</form>
<form method="post" action="<?php $_PHP_SELF?>">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="p5.jpg"></br>
     <input type="hidden" name="p" value="RING-2">
	<input type="hidden" name="pr" value="4500">
        <input type="submit" class="btn btn-default btn-sm" name="b1" value="Add to cart"><span class="glyphicon glyphicon-shopping-cart"></span> </br>
	<p><strong>RING-2</strong></p></br>
	<p><strong>PRICE: 4500</strong></p>
      </div>
    </div>
</form>
<form method="post" action="<?php $_PHP_SELF?>">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="p6.jpg"></br>
         <input type="hidden" name="p" value="RING-3">
	<input type="hidden" name="pr" value="3500">
        <input type="submit" class="btn btn-default btn-sm" name="b1" value="Add to cart"><span class="glyphicon glyphicon-shopping-cart"></span> </br>
	<p><strong>RING-3</strong></p></br>
	<p><strong>PRICE: 3500</strong></p>
      </div>
    </div>
</form>
</div>

</form>
</body>
</html>