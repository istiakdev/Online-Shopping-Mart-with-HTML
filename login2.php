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
 echo "<div class='alert alert-warning'>Invalid Username or Password</div>";
 }
}
?>


<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="pass" placeholder="Password" required=""/>      

      <button class="btn btn-lg btn-primary btn-block" type="submit" name = "submit">Login</button>   
    </form>
  </div>
  
  </form>

</body>

</html>
