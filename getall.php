
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Online Shopping Mart AUST</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/jquery.js"> </script>
<script src="js/bootstrap.min.js"> </script>
<script src = "main.js"> </script>
</head>
<body>
<div class = "navbar navbar-inverse navbar-fixed-top">
    <div class = "container-fluid">
	    <div class = "navbar-header">
		    <a href="#" class = "navbar-brand">Online Shopping</a>
			</div>
			<ul class = "nav navbar-nav">
			    <li><a href = "profile.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href = "#"><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
				<li><a href = "contact.php"><span class="glyphicon glyphicon-envelope"></span>Contact</a></li>
				<li style="width:300px;left:20px;top:10px;"> <input type="text" class = "form-control" id="search"></li>
				<li style = "top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button> </li>
	</ul>
	<ul class = "nav navbar-nav navbar-right ">
			    <li><a href = "#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span id="badge" class="badge">0</span></a>
				<div class = "dropdown-menu" style="width:400px;">
				    <div class = "panel panel-success" >
					    <div class="panel-heading">
						<div class = "row">
						     <div class = "col-md-3">Sl.No</div>
						     <div class = "col-md-3">Product Image</div>
						     <div class = "col-md-3">Product Name</div>
						     <div class = "col-md-3">Price in Tk.</div>
						</div>
						</div>
						<div class="panel-body">
						<div id="cart_product">
					<!--	<div class = "row">
						     <div class = "col-md-3">Sl.No</div>
						     <div class = "col-md-3">Product Image</div>
						     <div class = "col-md-3">Product Name</div>
						     <div class = "col-md-3">Price in $.</div>
						</div> -->
						</div>
						</div>
						<div class="panel-footer"></div>
				</div>
				</div>
				
				</li>
				<li><a href = "#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"];?> </a>
				      <ul class = "dropdown-menu">
					  <li> <a href="cart.php" style="text-decoration:none;color:blue;" > <span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
					  <li class = "divider"></li>
					  <li> <a href="logout.php" style="text-decoration:none;color:blue;">Logout</a></li>
				</ul>	  
				</li>
				
	</div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">
    <div class = "row">
	<div class = "col-md-1"></div>
	<div class = "col-md-2">
	<div id="get_category">
	</div>
	       <!--   <div class = "nav nav-pills nav-stacked">
	              <li class="active"><a href="#"><h4>Categories</h4></a></li>
				   <li><a href="#">Categories</a></li>
				    <li><a href="#">Categories</a></li>
					 <li><a href="#">Categories</a></li>
					  <li><a href="#">Categories</a></li>
			 </div> -->  
			 <div id="get_brand">
	</div>
			 	       <!--   <div class = "nav nav-pills nav-stacked">
	              <li class="active"><a href="#"><h4>Brand</h4></a></li>
				   <li><a href="#">Categories</a></li>
				    <li><a href="#">Categories</a></li>
					 <li><a href="#">Categories</a></li>
					  <li><a href="#">Categories</a></li>
			 </div>--> 

			 </div>
	
   <div class = "col-md-8  ">
       <div class="row">
	   <div class = "col-md-12" id="product_msg"> </div>
	   </div>
         <div class="panel panel-info">
		 <div class="panel-heading">Products</div>
		 <div class = "panel-body">
		    <div id= "get_product2">
			</div>
			<?php 
			
			  
			?>
			
	
			
		       <!--  <div class="col-md-4">
			  <div class="panel panel-info"> 
			      <div class="panel-heading">Samsung Galaxy</div>
				  <div class="panel-body">
				    <img src="images/galaxy.jpg"/> </div>
				  <div class="panel-heading">Tk 13000
				   <button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
				   </div>
			  </div>
			  </div> -->
			  </div>
			  <div class="panel-footer">&copy; AUST,2018</div>
	</div>
	</div>
	<div class = "col-md-1 "></div>
	
	</div>
	</div>

</body>
</html>