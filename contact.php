<?php



session_start();
session_destroy();



$result='';
$fname = '';
$lname= '';
$email = '';
$message = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
		$fname = clean_text($_POST["fname"]);
		$lname = clean_text($_POST["lname"]);
		$email = clean_text($_POST["email"]);
		$message = clean_text($_POST["message"]);
		$file_open = fopen("contact_data.csv", "a");
		$form_data = array(
			'fname'		=>	$fname,
			'lname'	    =>	$lname,
			'email'		=>	$email,
			'message'	=>	$message
		);
		fputcsv($file_open, $form_data);
        $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
		$fname = '';
		$lname = '';
		$email = '';
		$message = '';
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Shopping Mart</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="js/jquery.js"> </script>
        <script src="js/bootstrap.min.js"> </script>
        <script src = "main.js"> </script>
	</head>
	<body background = "shp.jpg">
<div class = "navbar navbar-inverse navbar-fixed-top">
    <div class = "container-fluid">
	    <div class = "navbar-header">
		    <a href="#" class = "navbar-brand">Online Shopping</a>
			</div>
			<ul class = "nav navbar-nav">
			    <li><a href = "home.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href = "contact.php"><span class="glyphicon glyphicon-envelope"></span>Contact</a></li> </ul> </div> </div> 

		<br />
		<div class="container">
		<p> <br/></p>
      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
			
			<br />
			<div class="col-md-6" style="margin:0 auto; float:none;">
				<form method="post">
					<h3  align="center" style="color:grey;">Contact Us</h3>
					<br />
					<div class="form-group">
						<label style="color:white;">Enter First Name</label>
						<input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>" />
					</div>

					<div class="form-group">
						<label style="color:white;">Enter Last Name</label>
						<input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>" />
					</div>					
					<div class="form-group">
						<label style="color:white;">Enter Email</label>
						<input type="text" name="email" class="form-control"  value="<?php echo $email; ?>" />
					</div>
					
					<div class="form-group">
						<label style="color:white;">Enter Message</label>
						<textarea name="message" class="form-control" ><?php echo $message; ?></textarea>
					</div>
					<div class="form-group" align="center">
						<input type="submit" name="submit" class="btn btn-info" value="Submit" />
					</div>
					
        </div> 
				</form>
			</div>
		</div>
	</body>
</html>
