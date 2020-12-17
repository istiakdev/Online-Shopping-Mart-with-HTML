<?php
include('db.php');
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
 //Username and Password sent from Form
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['pass']);
 $password = md5($password);
 $sql = "SELECT * FROM user_info WHERE email='$email' AND password='$password'";
 $query = mysqli_query($conn, $sql);
 $res=mysqli_num_rows($query);
 
 //If result match $username and $password Table row must be 1 row
 if($res == 1)
 {
  $row = mysqli_fetch_array($query);
  $_SESSION["uid"]= $row["user_id"];
  $_SESSION["name"]= $row["first_name"];
 header("Location: profile.php");
 }
 else
 {
 echo "Invalid Username or Password";
 }
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Online Shopping Mart AUST</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/jquery.js"> </script>
<script src="js/bootstrap.min.js"> </script>
<script src = "main.js"> </script>
</head>
<body background="images/sign.jpg">
<div class = "navbar navbar-inverse navbar-fixed-top">
    <div class = "container-fluid">
	    <div class = "navbar-header">
		    <a href="#" class = "navbar-brand">Online Shopping</a>
			</div>
			<ul class = "nav navbar-nav">
			    <li><a href = "home.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href = "contact.php"><span class="glyphicon glyphicon-envelope"></span>Contact</a></li>
				<li style="width:300px;left:20px;top:10px;"> <input type="text" class = "form-control" id="search"></li>
				<li style = "top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button> </li>
	</ul>
	<ul class = "nav navbar-nav navbar-right ">
			    <li><a href = "#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
				<div class = "dropdown-menu" style="width:400px;">
				    <div class = "panel panel-success" >
					    <div class="panel-heading">
						<div class = "row">
						     <div class = "col-md-3">Sl.No</div>
						     <div class = "col-md-3">Product Image</div>
						     <div class = "col-md-3">Product Name</div>
						     <div class = "col-md-3">Price in $.</div>
						</div>
						</div>
						<div class="panel-body"></div>
						<div class="panel-footer"></div>
				</div>
				</div>
				
				</li>
				<li><a href = "login.php" ><span class="glyphicon glyphicon-user"></span>SignIn</a>
				</li>
				<li><a href = "customer_registration.php"><span class="glyphicon glyphicon-ok"></span>SignUp</a></li>
				
	</ul>
	</div>
</div>
<p><br/><p>
<p><br/><p>
<p><br/><p>
<p><br/><p>
<p><br/><p>
<p><br/><p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

 <div class="container">
   <div class= "row">
<div class = "col-md-2">
</div>
<div class = "col-md-1">
</div>

<div class= "col-md-6">   
  <form class="form-signin"> 
      <h2 class="form-signin-heading" style="color : white;margin-left:160px;" >Please Login</h2>
	  <br/>
      <input type="text" class="form-control" name="email" placeholder="Email Address" required="" />
      <input type="password" class="form-control" name="pass" placeholder="Password" required=""/>      
      
      <button class="btn btn-lg btn-primary btn-block" style="margin:10px;margin-left:200px;width:150px;" type="submit"  name = "submit">Login</button>   
	     </form>
		<div class = "col-md-12" >

			<b style = "color :white;margin-left:180px;">Don't have an account?</b>
</div> 
<div class = "col-md-12" >
	
		<div class = "col-md-2" >

		<a href ="customer_registration.php"<button type="button" style="margin-left:205px;margin-top:6px;"class="btn btn-success btn-md">Sign Up</button></a>
</div> 
</div>
	

        		
  </div>
  </div>
  </div>
  
</form>
</body>
</html>