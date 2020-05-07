<html>
<head>
</head>
<body>
<?php

$con = mysqli_connect("localhost","root","","kajol");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo "Connected Successfull";
$sql="select pname,pprice from cart";
$record=mysqli_query($con,$sql);
?>


	
<table  class="table table-hover ">
    				

<thead>
						
<tr>
							
<th style="width:50%">Product</th>
							
<th style="width:10%">Price</th>
							
							
							
<th style="width:10%"></th>
						
</tr>
					
</thead>

					
<tbody>
	

<?php while ( $row = mysqli_fetch_array($record)) : ?>
<form method="get" action="remove.php"> 					

<tr>
							
<td >
<?php echo $row['pname']; ?> </td><input type="hidden" name="name" value ="<?php echo $row['pname']; ?>"></input>			<td >
<?php echo $row['pprice']; ?> </td><input type="hidden" name="price" value="<?php echo $row['pprice']; ?>"></input>			<td>  <button type="submit" class="btn btn-danger">REMOVE  </td>		

</tr>

</form>	
<?php endwhile ?>				
</tbody>
</table>
</body>
</html>