<html>
<head>
</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
	
<table id="cart" class="table table-hover table-condensed">
    				

<thead>
						
<tr>
							
<th style="width:50%">Product</th>
							
<th style="width:10%">Price</th>
							
<th style="width:8%">Quantity</th>
							
<th style="width:22%" class="text-center">Subtotal</th>
							
<th style="width:10%"></th>
						
</tr>
					
</thead>




<?php
$con = mysqli_connect("localhost","root","","kajol");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$id=$_REQUEST["action"];
$sql="select pname,price from product where pid=$id";
$result=mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0) 
{
   while($row = mysqli_fetch_row($result)) 
   {

?>

<tbody>
						
<tr>
							
<td data-th="Product">
								
<div class="row">
									
<div class="col-sm-10">

 <?php echo $row[0] ? >										
</div>
								
</div>
							
</td>

							
<td data-th="Price"> <?php echo $row["price"] ?> </td>
							
<td data-th="Quantity">
 								
<input type="number" class="form-control text-center" value="1">
							
</td>

							
<td data-th="Subtotal" class="text-center"></td>
							
<td class="actions" data-th="">
								
<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
</td>
						
</tr>
					
</tbody>
	

<?php
}
?>
</div>
</body>
</html>