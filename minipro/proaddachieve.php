
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
         <li><a href="https://nsspro.000webhostapp.com/proviewevent.php">View Events</a></li>
          <li><a href="https://nsspro.000webhostapp.com/proaddevent.php">Add Events</a></li>
          <li><a href="http://localhost/minipro/proupdevent.php">Update Events</a></li>
          
        </ul>
      </li>
	
      
     <li class="dropdown ">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACHIEVEMENTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/minipro/proviewachieve.php">View Achievements</a></li>
            <li><a href="https://nsspro.000webhostapp.com/proaddevent.php">Add Achievement</a></li>
          <li><a href="#">Update Achievements</a></li>
          
        </ul>
      </li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="http://localhost/minipro/proviewfb.php"><span class="glyphicon glyphicon-user"></span> FEEDBACK</a></li>
      <li><a href="file:///C:/wamp/www/minipro/logout.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
    </ul>
  </div>
</nav>

<form method="get" action="addachieve.php">
<h1>ADD NEW ACHIEVEMENT</h1>
<pre>
			
	EVENT NAME 				<input type="text" name="t1">
	STUDENT FIRST NAME 			<input type="text" name="t2">
	STUDENT LAST NAME 			<input type="text" name="t3">
	EVENT LEVEL 				<input type="text" name="t4">
					
			<input type="submit" value="ADD" class="btn btn-primary">
</pre>
</form>
	
	
		
</body>
</html>