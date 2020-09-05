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
        <link rel="stylesheet" type="text/css" href="bootstrap_files/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="bootstrap_files/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap_files/bootstrap.min.js"></script>
    </head>
    <body class="bg-light">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark px-md-1 shadow-lg">
                <a class="navbar-brand" href="#">Li | Bot</a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Today's Special<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="includes/Admin_SignIn_page.php">LiBot Manager<span class="sr-only">(current)</span></a>
                    </li>
                    <!--<form method="POST">
                        <button class="btn btn-sm btn-danger mt-2" type="submit" name="create">Create</button>
                    </form>-->
                </ul>
                <form class="form-inline mt-2 mt-md-2" action="includes/Student_SignIn.php" method="POST" autocomplete="off">
                    <input class="form-control mr-sm-2 mb-1" type="text" name="Reg_num" placeholder="Reg Number" aria-label="Reg Number" required autofocus>
                    <input class="form-control mr-sm-2 mb-1" type="text" name="Username" placeholder="Username" aria-label="SignIn" required autofocus>
                    <input class="form-control mr-sm-2 mb-1" type="password" name="Pass" placeholder="Password" aria-label="Password" required autofocus>
                    <button class="btn btn-outline-success my-2 my-sm-4 mb-1" name="SignIn" type="submit">SignIn</button>
                </form>
                <form class="form-inline mt-2 mt-md-2 px-md-2" action="includes/Student_SignUp_page.php">
                    <button class="btn btn-outline-success my-2 my-sm-2 mb-1" type="submit">SignUp</button>
                </form>
            </nav>
        </header>
        <?php
        require_once './includes/c_process.php';
        require_once 'includes/DB_Connect.php';
        ?>
        <div class="container-fluid py-5 mt-5">
            <div class="jumbotron">
                <h5 class="text-left text-dark mb-0 mt-0 text-monospace" id="h5headhumbo">Our Library top trending books</h5>
                <form class="form-group">
                    <input class="form-control" type="search" name="seacrh" placeholder="Search">
                </form>
            </div>
            <div class="card-columns mb-5 text-center">
                <!--CARD 1-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 1";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>ITC</span></p>
                            <p class="pb-3 text-left" >Author: <span>Wayne</span></p>
                            <p class="pb-3 text-left">Edition: <span>1st</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 2-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['2C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 2";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>Electronics</span></p>
                            <p class="pb-3 text-left" >Author: <span>Sir Omega</span></p>
                            <p class="pb-3 text-left">Edition: <span>1st</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['2C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 3-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['3C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 3";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>Basic Accounting</span></p>
                            <p class="pb-3 text-left" >Author: <span>Tim Black</span></p>
                            <p class="pb-3 text-left">Edition: <span>1st</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['3C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 4-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['4C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 4";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>Tragedies of Mr Pip</span></p>
                            <p class="pb-3 text-left" >Author: <span>Edgar Jepson</span></p>
                            <p class="pb-3 text-left">Edition: <span>1st</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['4C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 5-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['5C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 5";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>Bootstrap 5 Alpha</span></p>
                            <p class="pb-3 text-left" >Author: <span>Bootstrap Community</span></p>
                            <p class="pb-3 text-left">Edition: <span>5th</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['5C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 6-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['6C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 6";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>HTML & CSS 5</span></p>
                            <p class="pb-3 text-left" >Author: <span>John Duckett</span></p>
                            <p class="pb-3 text-left">Edition: <span>1st</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['6C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 7-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['7C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 7";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>Storks</span></p>
                            <p class="pb-3 text-left" >Author: <span>Wayne</span></p>
                            <p class="pb-3 text-left">Edition: <span>3rd</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['7C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 8-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['8C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 8";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>Two can play</span></p>
                            <p class="pb-3 text-left">Author: <span>Mary Ann</span></p>
                            <p class="pb-3 text-left">Edition: <span>1st</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['8C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 9-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['9C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 9";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>Calculus for Beginners</span></p>
                            <p class="pb-3 text-left">Author: <span>Bolston</span></p>
                            <p class="pb-3 text-left">Edition: <span>1st</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['9C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 10-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['10C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 10";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>Calculus 1</span></p>
                            <p class="pb-3 text-left">Author: <span>Bolston</span></p>
                            <p class="pb-3 text-left">Edition: <span>1st(Revised)</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['10C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 11-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['11C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 11";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>Calculus 1</span></p>
                            <p class="pb-3 text-left">Author: <span>Bolston</span></p>
                            <p class="pb-3 text-left">Edition: <span>1st(Revised)</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['11C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 12-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['12C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 12";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>Calculus 1</span></p>
                            <p class="pb-3 text-left">Author: <span>Bolston</span></p>
                            <p class="pb-3 text-left">Edition: <span>1st(Revised)</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['12C-code']; ?>">View Info</button>
                    </div>
                </div>
                <!--CARD 13-->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-<?= $_SESSION['13C-code']; ?>">
                        <h4 class="my-0 font-weight-light text-light"><?php
                            $sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 13";
                            $result3 = mysqli_query($conn, $sql3);
                            $f_result = mysqli_fetch_assoc($result3);
                            if ($f_result == "") {
                                echo 'Not Available';
                            } else {
                                echo htmlspecialchars($f_result['Header']);
                            }
                            ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="float-left ml-0 font-weight-bold">
                            <p class="pb-3 text-left">Name: <span>Calculus 1</span></p>
                            <p class="pb-3 text-left">Author: <span>Bolston</span></p>
                            <p class="pb-3 text-left">Edition: <span>1st(Revised)</span></p>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-outline-<?= $_SESSION['13C-code']; ?>">View Info</button>
                    </div>
                </div>
                <?php
                
                  function print_card() {
                  print '<div class="card mb-4 shadow-sm">
                  <div class="card-header bg-warning">
                  <h4 class="my-0 font-weight-light text-light">Most Read*</h4>
                  </div>
                  <div class="card-body">
                  <div class="float-left ml-0 font-weight-bold">
                  <p class="pb-3 text-left">Name: <span>Calculus 2</span></p>
                  <p class="pb-3 text-left">Author: <span>Bolston & Evans</span></p>
                  <p class="pb-3 text-left">Edition: <span>2nd</span></p>
                  </div>
                  <button type="button" class="btn btn-lg btn-block btn-outline-warning">View Info</button>
                  </div>
                  </div>';
                  }
                  ?>
                  <?php

                  //if(isset($_POST['create'])){
                  for ($i = 0; $i < 5; $i++) {
                  print_card();
                  }
                  //  } 
                ?>
            </div>
        </div>
    </body>
</html>