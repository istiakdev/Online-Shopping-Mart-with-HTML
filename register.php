<?php

include "db.php";
$f_name=$_POST ["f_name"];
$l_name=$_POST ["l_name"];
$email=$_POST ["email"];
$password=($_POST ["password"]);
$repassword=($_POST ["repassword"]);
$mobile=$_POST ["mobile"];
$address1=$_POST ["address1"];
$address2=$_POST ["address2"];
$name= "/^[A-Z][a-zA-Z ]+$/";
$emailValidation= "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number="/^[0-9]+$/";
if (empty($f_name) || empty($l_name) || empty($email) || empty($password) || 
empty($repassword) || empty ($mobile) || empty ($address1) || empty($address2) ) 
{
	echo "  
	<div class='alert alert-danger'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please Fill Up Fully</b>
</div>
	 " ;
	 exit();
}
else {
if(!preg_match($name,$f_name))
{     
    echo "  
	<div class='alert alert-warning'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <b>$f_name is not Valid</b>
</div>
	 " ;
	exit();
}
if(!preg_match($name,$l_name))
{
	    echo "  
	<div class='alert alert-warning'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <b>$l_name is not Valid</b>
</div>
	 " ;
	exit();
}
if(!preg_match($emailValidation,$email))
{
	    echo "  
	<div class='alert alert-warning'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <b>$email is not Valid</b>
</div>
	 " ;
	exit();
}

if (strlen($password)<9)
{
	    echo "  
	<div class='alert alert-warning'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <b>$password is weak</b>
</div>
	 " ;
	exit();
}

if ($password != $repassword)
{
	    echo "  
	<div class='alert alert-warning'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <b>$password is not matched</b>
</div>
	 " ;
	exit();
}
if (!preg_match($number,$mobile))
{
	    echo "  
	<div class='alert alert-warning'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <b>$f_name is not Valid</b>
</div>
	 " ;
	exit();
}
if (strlen($mobile) <= 10)
{
	    echo "  
	<div class='alert alert-warning'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <b>$mobile this number is not Valid</b>
</div>
	 " ;
	exit();
	
}
$sql = "SELECT user_id FROM user_info where email= '$email' LIMIT 1";
$check_query= mysqli_query($conn,$sql);
$count_email = mysqli_num_rows ($check_query);
if($count_email>0)
{
    echo "  
	<div class='alert alert-warning'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <b>Try another email</b>
</div>
	 " ;
	exit();
}
else {
	  
	$email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 $password = md5($password); //Password Encrypted;
	$sql = "INSERT INTO
	`user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`)
	VALUES (NULL, '$f_name', '$l_name', '$email', '$password', '$mobile', '$address1', '$address2')";
	$run_query=mysqli_query($conn,$sql);
	if($run_query)
	{
		    echo "  
	<div class='alert alert-success'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <b>Registration is Successfully Completed</b>
</div>
	 " ;
	}
}
}
?>