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

    <title>VERZEO Sleep Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   
    <link href="login.css" rel="stylesheet">

  
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    
  </head>

  <body>
     <br><br><br><br><br>
    <div align="center" class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading background">Please log in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="txtemail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="txtpwd" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label class="background">
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <a href="tracker.php" class="btn btn-lg btn-primary btn-block" role="button" type="submit">Log In</a>
      </form>
      <br>
      <p class="background">New Member? 
        <a href="register.php">Sign up</a>
      </p>

    </div> <!-- /container -->

  </body>
</html>