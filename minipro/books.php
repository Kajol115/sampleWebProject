<?php
session_start();
include("includes/config.php");
?>
<html>
<head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<style>
body{
    background: #13406b;
}
.navbar, .dropdown-menu{
background:#7eb1e5;
border: none;

}

.nav>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .dropdown-menu>li>a, .dropdown-menu>li{
  border-bottom: 3px solid transparent;
}
.nav>li>a:focus, .nav>li>a:hover,.nav .open>a, .nav .open>a:focus, .nav .open>a:hover, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
  border-bottom: 3px solid transparent;
  background: none;
}
.navbar a, .dropdown-menu>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .navbar-toggle{
 color:#1E0A0A;
}
.dropdown-menu{
      -webkit-box-shadow: #13406b;
    box-shadow:#9e4a4a;
}

.nav li:hover:nth-child(8n+1), .nav li.active:nth-child(8n+1){
  border-bottom: #C4E17F 3px solid;
}
.nav li:hover:nth-child(8n+2), .nav li.active:nth-child(8n+2){
  border-bottom: #F7FDCA 3px solid;
}
.nav li:hover:nth-child(8n+3), .nav li.active:nth-child(8n+3){
  border-bottom: #FECF71 3px solid;
}
.nav li:hover:nth-child(8n+4), .nav li.active:nth-child(8n+4){
  border-bottom: #F0776C 3px solid;
}
.nav li:hover:nth-child(8n+5), .nav li.active:nth-child(8n+5){
  border-bottom: #DB9DBE 3px solid;
}
.nav li:hover:nth-child(8n+6), .nav li.active:nth-child(8n+6){
  border-bottom: #C49CDE 3px solid;
}
.nav li:hover:nth-child(8n+7), .nav li.active:nth-child(8n+7){
  border-bottom: #669AE1 3px solid;
}
.nav li:hover:nth-child(8n+8), .nav li.active:nth-child(8n+8){
  border-bottom: #62C2E4 3px solid;
}

.navbar-toggle .icon-bar{
    color: #1E0A0A;
    background: #1E0A0A;
}
/*----------------------------------
    1. Body / Typography
----------------------------------*/

body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Roboto Condensed', sans-serif; letter-spacing: 0px; font-size: 16px; color: #848687; font-weight: 400; line-height: 30px; background-color: #f3f5f7; }
h1, h2, h3, h4, h5, h6 { color: #1c1e1e; margin: 0px 0px 15px 0px; font-weight: 400; font-family: 'Roboto Condensed', sans-serif; }
h1 { font-size: 30px; line-height: 42px; }
h2 { font-size: 24px; line-height: 32px; }
h3 { font-size: 22px; line-height: 30px; }
h4 { font-size: 18px; line-height: 26px; }
h5 { font-size: 14px; font-weight: 400; }
h6 { font-size: 12px; font-weight: 400; }
p { margin: 0 0 24px; line-height: 1.8; }
p:last-child { margin: 0px; }
ul, ol { list-style: none; margin: 0; padding: 0; }
a { text-decoration: none; color: #1c1e1e; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; }
a:focus, a:hover { text-decoration: none; color: #fb730f; }
.alignright { float: right; margin: 0px 0 20px 30px; }
.alignleft { float: left; margin: 0px 20px 0px 0; }
.showcase-block { margin-bottom: 10px; min-height: 80px; background-color: #e8eaec; padding: 100px 30px 0px 30px; text-align: center; }
.showcase-img { padding-top: 40px; }
.display-logo { margin-bottom: 50px; }
.showcase-block:hover { background-color: #fff; -webkit-box-shadow: 0px 4px 14px 0px rgba(0, 0, 0, 0.75); -moz-box-shadow: 0px 4px 14px 0px rgba(0, 0, 0, 0.10); box-shadow: 0px 4px 14px 0px rgba(0, 0, 0, 0.10); }
.showcase-block.active { background-color: #fff; -webkit-box-shadow: 0px 4px 14px 0px rgba(0, 0, 0, 0.75); -moz-box-shadow: 0px 4px 14px 0px rgba(0, 0, 0, 0.10); box-shadow: 0px 4px 14px 0px rgba(0, 0, 0, 0.10); }
</style>
</head>
<body>
<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Online Books Store</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php" class="">Home</a></li>
                        <li class=" dropdown">
                          
                        </li>
						 <li class="active"><a href="books.php">Books</a></li>
                        <li class="active"><a href="feedback.html">FeedBack</a></li>
                    
                    </ul>
				
					 <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="q">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
								
					<ul class="nav navbar-nav navbar-right">
						<li><a href="cart.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
                
				<?php
					if(isset($_SESSION['status']) && $_SESSION['status'])
					{
						echo "<li class='active'><font color=red>Welcome ".$_SESSION['name']."</font></li>";
						echo "<li class='active'><a href='logout.php'>Logout</a></li>";
					}
					else
					{
						echo "<li class='active'><a href='register.html'>Register</a></li>";
						echo "<li class='active'><a href='login.html'>Login</a></li>";	
					}
				?>
				
				</div>	
            </div>
        </nav>
    </div>
</div>
  <!-- books showcase -->
    <div class="space-medium">
	
	<div class="col-lg-12">
	
<?php 
 
    $result=mysqli_query($conn,'select * from product');
?>
<br><br><br><br><br>
<table cellpadding="2" cellspacing="2" border="2" align="center">
    <tr>
        <th>Id</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Buy</th>
    </tr>
    <?php while($product=mysqli_fetch_object($result)){ ?>
        <tr>
            <td><?php echo $product->id; ?></td>
            <td><?php echo $product->productname; ?></td>
            <td><?php echo $product->price; ?></td>
            <td><a href="cart.php?id=<?php echo $product->id;?>">Order Now</td>
            
        </tr>
    <?php  } ?>
</table>

	</div>
	
        
            </div>
             <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center">
              Made By KBRAJALI <a href=""><img src="images/copyright.jpg" > 2018</a></a>
              </div></div>
        </div>
    </div>

    <!-- books showcase -->
</body>
</html>