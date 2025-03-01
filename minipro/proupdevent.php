<?php


$conn = mysqli_connect('localhost','root', '', 'pro');
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM event';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
.jumbotron {
    position: relative;
    background: #8B0000;
    width: 100%;
    height: 100%;
    
    overflow: hidden;
    max-width:2000px;
    max-height:243px;
	color:white;
	img-src: "hsnclogo.png" ;
	img-position: left-side;
   
   font:italic small-caps bold 15px georgia;
}


		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	
	  <div class="jumbotron text-center">
    <h1>NSS UNIT OF K.C.COLLEGE.</h1>      
    
  </div>

    
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">KCNSS</a>
    </div>
    <ul class="nav navbar-nav">
	
	<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">EVENTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/minipro/proviewevent.php">View Events</a></li>
          <li><a href="http://localhost/minipro/proupdevent.php">Update Events</a></li>
          
        </ul>
      </li>
	
      
     <li class="dropdown ">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACHIEVEMENTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/minipro/proviewachieve.php">View Achievements</a></li>
          <li><a href="#">Update Achievements</a></li>
          
        </ul>
      </li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="http://localhost/minipro/proviewfb.php"><span class="glyphicon glyphicon-user"></span> FEEDBACK</a></li>
      <li><a href="file:///C:/wamp/www/minipro/login.html"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
    </ul>
  </div>
</nav>

	
	
	
	<table class="data-table">
		<caption class="title">LIST OF EVENTS</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>EVENT NAME</th>
				<th>DATE</th>
				<th>VENUE</th>
				<th>DESCRIPTION</th>
				<th>			</th>
			</tr>
		</thead>
<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($query) ) : ?>
		
		<form method="get" action="editevent.php"> 					

<tr>
<td >
<?php echo $row['eid']; ?></td>							
<td >
<input type="text" name="ename" value ="<?php echo $row['ename']; ?>"></td>			
<td >
<input type="text" name="date" value="<?php echo $row['date']; ?>"></td>
<td >
<input type="text" name="venue" value ="<?php echo $row['venue']; ?>"></td>	
<td >
<input type="text" name="desc" value ="<?php echo $row['description']; ?>"> </td>			
<td>  <button type="submit" class="btn btn-primary">EDIT  </td>		

</tr>

</form>	
<?php endwhile ?>
		
		<!--{
			
			echo '<tr>
					<td>'.$row['eid'].'</td>
					<td>'.$row['ename'].'</td>
					<td>'.$row['date'].'</td>
					<td>'.  $row['venue']. '</td>
					<td>'. $row['description'] . '</td>
				</tr>';
			
		}?> -->
</tbody>
		
	</table>
</body>
</html>