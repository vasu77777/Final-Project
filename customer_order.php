<?php
require "config/constants.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<style>
body
{
	margin: 0px auto;
}
.container
{
	width: 1200px !important;
	height:auto;
	padding-right: 0px !important;
    padding-left: 0px !important;
	margin: 0px auto !important;
}
.header
{
	width: 1200px;
	height: 200px;
	background-color:#000000;
	    margin-bottom: -10px;
}
h4
{
	margin-top: 0px;
}
.menu
{
	width: 1200px;
	height: 50px;
	background-color:ffff66;
}
.slider
{
	width: 1200px;
	height: 400px;
	background-color: #4db8ff;
}
.mainpage
{
	width: 1200px;
	height: 500px;
	background-color:white;
}
.leftf
{
	padding: 5px;
}

.lefts
{
	padding: 80px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #ff0080;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #ff4dff;
}
.leftpage
{
	width: 300px;
	height: 555px;
	background-color:#ebebe0;
	float: left;
}
.rightpage
{
	width: 900px;
	height: 555px;
 background-color:#ffffe6;
 float: left;
}

.rightpages
{
	width: 1200px;
	height: 555px;
 background-color:#ffffe6;
 float: left;
}
p.set
{
text-align:justify;
padding: 20px;	
}
.firstrow
{
	width: 1200px;
	height: 240px;
	background-color:#D5CCC5;
	margin-top: 5px;
	margin-left: 5px;
    width: 1200px;
}

.row1
{
	width: 205px;
	height: 200px;
	background-color:white;
    float: left;
    margin-top: 10px;
    margin-right: 5px;
 margin-left: 15px;
}
.footer p
{
	text-align: center;

}
.list
{
	width: 1200px;
	height: auto;
	background-color: red;
padding-left: 10px;
	}
.list1
{
	width: 192px;
	height: 200px;
	background-color: white;
	float: left;
	margin-right: 5px;
	margin-left: 10px;

}

.list6
{
	width: 180px;
	height: 200px;
	background-color: white;
	float: left;
	margin-left: 10px;
	margin-top: 20px;

	margin-right: 5px;
}
.row55
{
	width: 205px;
	height: 200px;
	background-color:white;
    float: left;
    margin-top: 10px;
 margin-left: 18px;
}

.row2
{
	width: 209px;
	height: 200px;
	background-color:white;
	margin-left: 8px;

    margin-top: 10px;

	float: left;
	

}

.row3
{
	width: 209px;
	height: 200px;
	background-color:white;
	margin-left: 8px;
	float: left;

    margin-top: 10px;

	

}
.row4
{
	width: 210px;
	height: 200px;
	background-color:white;
	margin-left: 8px;
	float: left;

    margin-top: 10px;
	

}

.feat

{
	width: 100%;
	background-color:#ebebe0;
	height: 50px;
	padding-top: 15px;
	


}


.feats 

{
	width: 1200px;
	background-color:#ebebe0;
	height: 50px;
	padding-top: 15px;
	


}

.feat h3
{
	font-size: 20px;
	margin-top: 0px;
	padding: 10px;

    
}
.secrow
{
	width: 890px;
	height: 235px;
	background-color:#D5CCCC;
	margin-top: 5px;
	margin-left: 5px;
}
.latestoffer
{
	width: 1200px;
	height: 400px;
	background-color:white;
}
.footer
{
	width: 1200px;
	height: 100px;
	background-color: black;
}
.footer p
{
 padding-top: 60px;
}
.logo
{
	width: 200px;
    height: 195px;
    float: left;
    margin-top: 5px;

    margin-left: 5px;
}
.cont
{
	width: 900px;
	height: 200px;
	float: left;
	padding-left: 70px;
	margin-left: 10px;
}


li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
}

li a:hover {
  background-color:#99004d;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color:#ff0080;
}
</style>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vasu  Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
<div class="container">
<div class="header">
			<div class="logo">
				<img src="images/logo.png" width="200px" height="195px">
			</div>
			<div class="cont">
				<img src="images/prof-banner.png" width="900" height="200px">
			</div>
			
		</div>
		<div class="menu" style="background-color:#333 !important;">
			
		<ul style="list-style:none;font-size: 20px;">
  <li><a href="index.php">Home</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="index.php">Product</a></li>
<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;padding: 8px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
            <li><a href="logout.php">Logout</a></li>
  
  
  
</ul>

<ul class="nav navbar-nav navbar-right" style="margin-right: 0px;">
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-xs-3">Sl.No</div>
									<div class="col-md-3 col-xs-3">Product Image</div>
									<div class="col-md-3 col-xs-3">Product Name</div>
									<div class="col-md-3 col-xs-3">Price in <?php echo CURRENCY; ?></div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color:blue;">Orders</a></li>
						<li class="divider"></li>
						
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	
	<div class="slider">
		<img src="images/slider.jpg
		" width="1200px" height="400px;">
			
		</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Customer Order details</h1>
						<hr/>
						<?php
							include_once("db.php");
							$user_id = $_SESSION["uid"];
							$orders_list = "SELECT o.order_id,o.user_id,o.product_id,o.qty,o.trx_id,o.p_status,p.product_title,p.product_price,p.product_image FROM orders o,products p WHERE o.user_id='$user_id' AND o.product_id=p.product_id";
							$query = mysqli_query($con,$orders_list);
							if (mysqli_num_rows($query) > 0) {
								while ($row=mysqli_fetch_array($query)) {
									?>
										<div class="row">
											<div class="col-md-6">
												<img style="float:right;" src="product_images/<?php echo $row['product_image']; ?>" class="img-responsive img-thumbnail"/>
											</div>
											<div class="col-md-6">
												<table>
													<tr><td>Product Name</td><td><b><?php echo $row["product_title"]; ?></b> </td></tr>
													<tr><td>Product Price</td><td><b><?php echo  CURRENCY." ".$row["product_price"]; ?></b></td></tr>
													<tr><td>Quantity</td><td><b><?php echo $row["qty"]; ?></b></td></tr>
													<tr><td>Transaction Id</td><td><b><?php echo $row["trx_id"]; ?></b></td></tr>
												</table>
											</div>
										</div>
									<?php
								}
							}
						?>
						
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<div class="latestoffer">
			<img src="images/CosmeticHeader.jpg" width="1200px" height="400px">
		</div>
		<div class="footer">
			<p align="center" style="color: white">WELCOME TO OUR SITE</p>
		</div>
	</div>
</body>
</html>
















































