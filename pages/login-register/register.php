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
    <link rel="stylesheet" href="../../css/register.css" />
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
                        Sign up your 2k account
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
                                        <label for="signup_full_name">full name:</label>
                                        <input type="text" name="signup_full_name" class="form-control" value="<?php echo $_POST["signup_full_name"]; ?>" required />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <div class="form-field">
                                        <label for="signup_email">email address:</label>
                                        <input type="text" name="signup_email" class="form-control" value="<?php echo $_POST["signup_email"]; ?>" required />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <div class="form-field">
                                        <label for="signup_password">password:</label>
                                        <input type="password" name="signup_password" class="form-control" value="<?php echo $_POST["signup_password"]; ?>" required />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <div class="form-field">
                                        <label for="signup_cpassword">confirm password:</label>
                                        <input type="password" name="signup_cpassword" class="form-control" value="<?php echo $_POST["signup_cpassword"]; ?>" required />
                                    </div>
                                </div>
                                <div class="register-btn">
                                    <button type="submit" class="Cbutton register-btn-style" name="signup">REGISTER</button>
                                    <!-- <input type="submit" class="Cbutton register-btn-style" name="signup"> -->
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
                    <div class="signin">
                        <p>A user already? <a class="signin-link" href="./login.php">Go back.</a></p>
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