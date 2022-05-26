<?php
if ($_POST) {
	$email=$_POST['email'];
	$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','sunkoshi');
$sql="SELECT * FROM login WHERE email='$email' AND password='$password'";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);

	if ($count==1) {
		session_start();
		$_SESSION['email']=$email;
    header("location:sunkoshi.php");
    echo "You are logged in successfully";
			}
	else
  {
		echo "Please check your email and password";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/bac272c58a.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

           <link rel="shortcut icon" href="images/logo.png">
	<title></title>
</head>
<body>	
    <div class="container-fluid" style=" border-radius:40px ; width: 30%;">
 <h3 class="title text-center">Sign In</h3>
            <form class="form-signin" method="POST" action="">
              <div class="form-label-group">
                <label for="inputEmail">Email address</label>
                <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
              </div>
              <div class="checkbox-control">
                <input type="checkbox" id="Check1">
                <label for="Check1">Remember password</label>
              </div>    
              <button class="btn btn-lg btn-primary btn-block text-uppercase " type="submit">log in </button>
              <hr style="border-color: #9e0c18; ">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>          
            </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>