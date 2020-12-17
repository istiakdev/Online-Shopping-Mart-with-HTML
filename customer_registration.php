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
			    <li><a href = "home.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href = "contact.php"><span class="glyphicon glyphicon-envelope"></span>Contact</a></li>
				</ul>
				
		</div>
		</div>
		<p><br/><p>
		<p><br/><p>
		<p><br/><p>
		<div class = "container-fluid">
 
			  <div class = "row">
			  <div class="col-md-2"></div>
			  <div class = "col-md-8" id ="signup_msg"> </div>
			         </div>
		<div class = "row">
		   <div class = "col-md-2"></div>
		   <div class = "col-md-8">
		   <div class = "panel panel-primary">
		   <div class= "panel-heading" >Customer Sign Up Form</div>
		     <div class= "panel-body" >
			  <form method = "POST">
			  <div class = "row">
			    <div class = "col-md-6">
				 <label for ="f_name">First Name</label>
			     <input type = "text" id="f_name" name="f_name" class="form-control">
				</div>
				<div class = "col-md-6">
				 <label for ="l_name">Last Name</label>
			  <input type = "text" id="l_name" name="l_name" class="form-control">
				</div>
				</div>
                     <div class = "row"> 
                       <div class = "col-md-12">
				 <label for ="email">Email</label>
			  <input type = "text" id="email" name="email" class="form-control">
				</div>
                    </div>
					
					 <div class = "row"> 
                       <div class = "col-md-12">
				 <label for ="password">Password</label>
			  <input type = "password" id="password" name="password" class="form-control">
				</div>
                    </div>
					
					 <div class = "row"> 
                       <div class = "col-md-12">
				 <label for ="repassword">Re-enter Password</label>
			  <input type = "password" id="repassword" name="repassword" class="form-control">
				</div>
                    </div>
					
						 <div class = "row"> 
                       <div class = "col-md-12">
				 <label for ="mobile">Mobile</label>
			  <input type = "text" id="mobile" name="mobile" class="form-control">
				</div>
                    </div>
					
						 <div class = "row"> 
                       <div class = "col-md-12">
				 <label for ="address1">Address Line 1</label>
			  <input type = "text" id="address1" name="address1" class="form-control">
				</div>
                    </div>
					
					 <div class = "row"> 
                       <div class = "col-md-12">
				 <label for ="address2">Address Line 2</label>
			  <input type = "text" id="address2" name="address2" class="form-control">
				</div>
                    </div>
					<p><br/></p>
					
					
					
					<div class = "row"> 
                     <div class = "col-md-12">
			         <input style ="float:right;" type = "button" id="signup_button" name="signup_button" value="Sign Up" class="btn btn-success btn-lg" >
				      </div>
                     </div>
					
					
					
					
					
					
			  </div>
			  </form>
			     <div class= "panel-footer" ></div>
		   </div>
		   </div>
		   <div class="col-md-2"></div>
		</div>
</div>		
</body>
</html>		