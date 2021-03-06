<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LiBot v2.</title>
        <meta author="PTec Co.">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="../bootstrap_files/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style Student_SignUp_page.css">
        <script type="text/javascript" src="../bootstrap_files/bootstrap.min.js"></script>
    </head>
    <body class="bg-light text-center">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-lg">
                <a class="navbar-brand " href="#">Create Account</a>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
                <p class="mt-4 mb-3 text-break">&copy; PTec Cooperation 2020-2023 <span class="mt-5 mb-3 text-break">All Rights Reserved</span></p>
            </nav>
            <div class="jumbotron">

                <div class="rows">
                    <form class="form-signin" novalidate action="./Student_SignUp.php" method="POST" autocomplete="off">
                        
                        <?php if (isset($_SESSION['message'])):?>
                            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                               <?php
                               echo $_SESSION['message'];
                               unset($_SESSION['message']);
                            ?>
                            </div>
                        <?php endif ?>


                        <h1 class="h4 mb-4 font-weight-normal">SignUp to LiBot</h1>
                        <div class="row">
                            <div class="col-md-9 mb-4">
                                <input type="text" class="form-control mr-sm-2" id="regnumber" name="reg_num" placeholder="Student Reg Number" required autofocus>
                            </div>
                            <div class="col-md-12 mb-4">
                                <input type="text" class="form-control mr-sm-2" id="username" name="username" placeholder="Username" required autofocus>
                            </div>
                            <div class="col-md-12 mb-4">
                                <input type="password" class="form-control mr-sm-2" id="password" name="password" placeholder="Password" required autofocus>
                            </div>
                            <div class="col-md-12 mb-4">
                                <input type="password" class="form-control mr-sm-2" id="password2" name="password2" placeholder="Confirm Password" required autofocus>
                            </div>
                        </div>
                        <button class="btn btn-outline-success my-4 my-sm-1 btn-lg btn-block" type="submit" name="SignUp">SignUp</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
