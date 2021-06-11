<?php

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {
  
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5 ($_POST['password']);
  $cpassword = md5( $_POST['cpassword']);

  if ($password == cpassword) {
      $sql = "INSERT INTO u (username, email ,password  )
              VALUES(' $username','$email',' $password')";
      $result = mysqli_query($conn, $sql );
      if ( $result) {
               
              }else{
                 echo "<script>alert('Woops Something Went Wrong.')</script>";
              }        
  }else{
    echo "<script>alert('password Not Matched.')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>NuSleep Register</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="register.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <br><br><br>

    <div align = center class="container">

      <form action="" method="POST" class="form-signin">
        <h2 class="form-signin-heading background"> Register</h2>
        <label for="inputName" class="sr-only">Name</label>
        <input type="text" id="inputName" class="form-control" placeholder="Full Name"  name="username" value="<?php echo  $username;?>" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" value="<?php echo  $email;?>"    required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" value="<?php echo  $_POST['password'];?>"   required>
        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" name="cpassword" value="<?php echo  $_POST['cpassword'];?>"  required>
        <div class="checkbox">
          <label class="background">
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <a name="submit" href="sleep.html" class="btn btn-lg btn-primary btn-block" role="button" type="submit">Register</a>
      </form>
      <br>
      <p class="background">Already a member? 
      	<a align = center href="index.php">Log in</a>
      </p>

    </div> <!-- /container -->

  </body>
</html>