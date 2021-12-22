<?php

session_start();

// echo $_SESSION["user_id"];

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
}

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
    <link rel="stylesheet" href="../../css/welcome-profile.css" />
</head>

<body>

    <?php
    include './login-register-header.php';
    ?>

    <section id="welcome-profile-background-image">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="reuse-font welcome-sign" style="text-transform: uppercase; color: #fff">
                        Welcome to 2k user -&nbsp;<span class="info"><?= $_SESSION['user_id']; ?></span>
                    </h1>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="input" placeholder="What Do You Want to Do...">
                                <button class="add"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="user-logout-btn">
                        <a href="logout.php"><button class="Cbutton user-logout-btn-style">LOGOUT</button></a>
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