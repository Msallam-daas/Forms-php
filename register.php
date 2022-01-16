<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div id="container">
      <div class="form-wrap">
        <h1>Join Us</h1>
        <p>Register Your Own User</p>
        <form id="RegisterForm" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
          <div class="form-group">
            <label for="email"> Email<span class="text-danger">*</span></label>
            <input id="email" type="email" name="email" class="form-control" placeholder="Enter Email" required />
          </div>
          <div class="form-group">
            <label for="password">password<span class="text-danger">*</span></label>
            <input id="pass" type="password" name="password" class="form-control" placeholder="Enter Password" required />
          </div>
          <div class="form-group">
            <label for="password2">confirm Password<span class="text-danger">*</span></label>
            <input id="confirmPass" type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required />
          </div>
          <button type="submit" name="register" value="Register">JOIN US</button>
          <p id="formEnding-text">
            BY click Joining us means you agree to our
            <a href="#">Terms & Conditions</a> and our
            <a href="#">Privacy policy</a>
          </p>
          <p id="ErrMsg"></p>
          <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['password'] == $_POST['confirmpassword'] && strlen($_POST['password']) > 6) {
        $_SESSION["users"][] = ["email" => $_POST['email'], "password" => $_POST['password']];
        header('Location:log.php');
    }
}

?>
        </form>
      </div>
      <footer>
        <p>you have an account?<a href="log.php">Login</a></p>
      </footer>
    </div>

   <script src="script.js"></script>
  </body>
</html>
