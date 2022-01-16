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
        <p>Login Your Own User</p>
        <form  method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email" required/>
          </div>
          <div class="form-group">
            <label for="ر">password</label>
            <input type="password" id="ر" class="form-control" name="password" placeholder="Enter Your  Password" required/>
          </div>
          <button type="submit" value="Login">Log in</button>
          <p id="formEnding-text">
            BY click Joining us means you agree to our
            <a href="#">Terms & Conditions</a> and our
            <a href="#">Privacy policy</a>
          </p>
        </form>
      </div>
      <footer>
        <p>you dont have an account?<a href="register.php">Register</a></p>
      </footer>
    </div>
    <?php
    $flag = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        foreach ($_SESSION["users"] as $key => $value) {
            if ($_POST['email'] == $value["email"]   && $_POST['password'] == $value["password"]) {
                $flag = true;
                $_SESSION["loginUser"] = $_POST['email'];
                header('Location:home.php');
            } else {
                $flag = false;
            }
        }
    }
    echo $flag;

    ?>
  </body>
</html>
