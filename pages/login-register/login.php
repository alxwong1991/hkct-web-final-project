<?php

include('../../php/script.php');

error_reporting(0)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>assignment2</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../../css/bootstrap/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../css/header.css" />
  <link rel="stylesheet" href="../../css/footer.css" />
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="stylesheet" href="../../css/login.css" />
</head>

<body>

  <?php
  include './login-register-header.php';
  ?>

  <section id="login-background-image">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="reuse-font title-2k-login" style="text-transform: uppercase; color: #fff">
            Sign in with your 2k account login
          </h1>
        </div>
      </div>
    </div>

    <!------------------------------------------------------------------------------------------------------- sign up for newsletter -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="signup-form">
            <form action="" class="mt-3 mb-5 p-3 bg-transparent" method="post">
              <div class="row">
                <div class="mb-3 col-md-12">
                  <div class="form-field">
                    <label for="email">email address:</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $_POST["email"]; ?>" required />
                  </div>
                </div>
                <div class="mb-3 col-md-12">
                  <div class="form-field">
                    <label for="password">password:</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $_POST["password"]; ?>" required />
                  </div>
                </div>
                <div class="login-btn">
                  <button type="submit" name="signin" class="Cbutton login-btn-style">LOGIN</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="signup">
            <p>Not a user? <a class="signup-link" href="./register.php">Sign up here!</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include './login-register-footer.php';
  ?>

</body>
<script src="https://use.fontawesome.com/4411da1e28.js"></script>
<script src="./js/bootstrap/popper.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="./js/bootstrap/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./js/script.js"></script>

</html>