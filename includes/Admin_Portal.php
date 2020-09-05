<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Portal</title>
        <meta author="PTec Co.">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="../bootstrap_files/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style Admin_Portal.css">
        <script type="text/javascript" src="../bootstrap_files/popper.min.js"></script>
        <script type="text/javascript" src="../bootstrap_files/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap_files/bootstrap.min.js"></script>
    </head>
    <body class="bg-light">
        <?php require_once './DB_Connect.php'; ?>
        <div class="d-flex flex-column fixed-top flex-md-row align-items-center p-0 px-md-1 mb-1 bg-dark border-bottom shadow-lg">
            <h5 class="my-3 mr-md-auto font-weight-normal text-light">Li | Bot Manager</h5>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark flex-sm-nowrap p-0 shadow-lg">
                <button class="navbar-toggler position-absolute d-md-none collapsed float-right" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <h5 class="text-light pt-2">Staff:<span class="text-muted"><?php echo $_SESSION['staff_num'] ?></span></h5>
            <form class="form-group pt-3" action="./Admin_SignOut.php" method="POST">
                <button class="btn btn-outline-success my-2 my-sm-1 ml-5" id="btn signout" name="Admin_SignOut" type="submit">SignOut</button>
            </form>
        </div>
        <div class="container-fluid mt-3">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-transparent sidebar collapse">
                    <div class="sidebar-sticky pt-4">
                        <ul class=" container nav flex-column mt-3">
                            <li class="nav-item">
                                <a class="nav-link active text-primary float-left text-dark" href="#">
                                    <span data-feather="home"></span>
                                    <form method="POST">
                                        <button class="btn" name="cp">Control Panel</button><span class="sr-only">(current)</span>
                                    </form>
                                </a>
                            </li>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
                                <span>Books</span>
                                <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                                    <span data-feather="plus-circle"></span>
                                </a>
                            </h6>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file"></span>
                                    <form method="POST">
                                        <button class="btn text-primary" name="reg">Register</button>
                                    </form>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="shopping-cart"></span>
                                    <form method="POST">
                                        <button class="btn text-primary" name="regs">Registry</button>
                                    </form>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="users"></span>
                                    <form method="POST">
                                        <button class="btn text-primary" name="isue">Issue</button>
                                    </form>
                                </a>
                            </li>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
                                <span>Pockets</span>
                                <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                                    <span data-feather="plus-circle"></span>
                                </a>
                            </h6>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="bar-chart-2"></span>
                                    <form method="POST">
                                        <button class="btn text-primary" name="borr">Borrowers</button>
                                    </form>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="layers"></span>
                                    <form method="POST">
                                        <button class="btn text-primary" name="return">Return</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Students</span>
                            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    <form method="POST">
                                        <button class="btn text-primary" name="sreg">Register</button>
                                    </form>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    <form method="POST">
                                        <button class="btn text-primary" name="sregs">Registry</button>
                                    </form>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    <form method="POST">
                                        <button class="btn text-primary" name="signed">Signed Up</button>
                                    </form>
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
                <?php
                if (isset($_POST['cp'])) {
                    echo '<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary mt-4">
                    <div class="d-flex container mt-5 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
                        <h3 class="h3 text-light">Control Panel</h3>
                        <div class="btn-toolbar mb-2 mb-md-0 mr-5">
                            <div class="btn-group mr-2">
                                <form method="POST">
                                    <button type="button" class="btn btn-sm btn-outline-success" type="submit" name="create">Create</button>
                                <button type="button" class="btn btn-sm btn-outline-success disabled">Export</button>
                                </form>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-outline-success dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    Reports
                                </button>
                                <ul class="dropdown-menu bg-transparent" role="menu" aria-labelledby="dropdownresults"">
                                    <li class="text-center mb-2"><a class="text-light text-decoration-none font-weight-lighter" role="menuitem" href="#">View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                </main>';
                }
                ?>

                <?php
                if (isset($_POST['reg'])) {

                    echo '<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary mt-4">
                    <div class="d-flex container mt-5 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-5 border-bottom">
                        <h3 class="h3 text-light">Book Registration</h3>
                    </div>
                    <form action="Book_Registration.php" method="POST">
                        <div class="row ml-5 mt-5 mb-5">
                            <div class="col-md-5 mb-5 float-left">
                                <input type="text" class="form-control mr-sm-2" id="acc_number" name="acc_num" placeholder="Accession Number" required autofocus>
                            </div>
                            <div class="col-md-5 mb-5">
                                <input type="text" class="form-control mr-sm-2" id="isbn" name="isbn" placeholder="ISBN" required autofocus>
                            </div>
                            <div class="col-md-7 mb-5">
                                <input type="text" class="form-control mr-sm-2" id="name" name="name" placeholder="Name" required autofocus>
                            </div>
                            <div class="col-md-7 mb-5">
                                <input type="text" class="form-control mr-sm-2" id="author" name="author" placeholder="Author" required autofocus>
                            </div>
                            <div class="col-md-7 mb-5">
                                <input type="text" class="form-control mr-sm-2" id="edition" name="edition" placeholder="Edition" required autofocus>
                            </div>
                        </div>
                            <div class="ml-3 mb-xl-5">
                                <button class="btn btn-outline-success btn-md ml-5 mb-xl-5" type="submit" name="bregister">Register</button>
                            </div>
                    </form>

                </main>';
                }
                ?>
                <?php
                if (isset($_POST['regs'])) {

                echo '<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary mt-4">
                    <div class="d-flex container mt-5 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
                        <h3 class="h3 text-light">Registry</h3>
                    </div>
                    <div class="row justify-content-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            
                                <tr>
                                    <td>
                                    <td>
                                    <td>

                                        <a class="btn btn-info">Edit</a>

                                        <a class="btn btn-danger">Delete</a>   
                                    </td>
                                </tr>
                            
                        </table>
                    </div>
                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                </main>';
                }
                ?>
                <?php
                if (isset($_POST['isue'])) {

                    echo '<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary mt-4">
                    <div class="d-flex container mt-5 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
                        <h3 class="h3 text-light">Issue Book</h3>
                    </div>
                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                </main>';
                }
                ?>

                <?php
                if (isset($_POST['borr'])) {

                    echo '<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary mt-4">
                    <div class="d-flex container mt-5 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
                        <h3 class="h3 text-light">Borrowers</h3>
                    </div>
                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                </main>';
                }
                ?>

                <?php
                if (isset($_POST['return'])) {

                    echo '<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary mt-4">
                    <div class="d-flex container mt-5 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
                        <h3 class="h3 text-light">Return Book</h3>
                    </div>
                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                </main>';
                }
                ?>
                <?php if (isset($_SESSION['sreg_message'])): ?>
                    <div class="alert alert-<?= $_SESSION[sreg_message_type] ?>">
                        <?php
                        echo $_SESSION[sreg_message];
                        unset($_SESSION[sreg_message]);
                        ?>
                    </div>
                <?php endif ?>
                <?php
                if (isset($_POST['sreg'])) {

                    echo '<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary mt-4">
                    <div class="d-flex container mt-5 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-5 border-bottom">
                        <h3 class="h3 text-light">Student Registration</h3>
                    </div>
                    <form action="Student_Registration.php" method="POST">
                        <div class="row ml-5 mt-5">
                            <div class="col-md-7 mb-5 float-left">
                                <input type="text" class="form-control mr-sm-2" id="regnumber" name="regnum" placeholder="Reg Number" required autofocus>
                            </div>
                            <div class="col-md-6 mb-5">
                                <input type="text" class="form-control mr-sm-2" id="name" name="Name" placeholder="Name" required autofocus>
                            </div>
                            <div class="col-md-6 mb-5">
                                <input type="text" class="form-control mr-sm-2" id="surname" name="Surname" placeholder="Surname" required autofocus>
                            </div>
                            <div class="col-md-6 mb-5">
                                <select class="custom-select d-block w-200" id="gender" name="gender" required>
                                    <option value="">Gender*</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other?</option>
                                </select>
                            </div>
                            <div class="col-md-7 mb-5">
                                <input type="text" class="form-control mr-sm-2" id="idnum" name="idnum" placeholder="ID Number" required autofocus>
                            </div>
                            <div class="col-md-7 mb-5">
                                <input type="text" class="form-control mr-sm-2" id="mail" name="mail" placeholder="Email" required autofocus>
                            </div>
                            <div class="col-md-6 mb-5">
                                <select class="custom-select d-block w-200" id="course" name="course" required>
                                    <option value="">Course*</option>
                                    <option value="it" class="txt_field">IT</option>
                                    <option value="banking_and_finance" class="txt_field">Banking and Finance</option>
                                    <option value="business_management_studies" class="txt_field">Business Management Studies</option>
                                    <option value="accounting" class="txt_field">Accounting</option>
                                    <option value="marketing" class="txt_field">Marketing</option>
                                    <option value="purchasing_and_supply" class="txt_field">Purchasing and Supply</option>
                                    <option value="secretarial" class="txt_field">Secretarial</option>
                                    <option value="human_resources" class="txt_field">Human Resources</option>
                                    <option value="records_management" class="txt_field">Records Management</option>
                                    <option value="clothing" class="txt_field">Clothing</option>
                                    <option value="health" class="txt_field">Health</option>
                                    <option value="science_technology" class="txt_field">Science Technology</option>
                                    <option value="electrical_engineering" class="txt_field">Electrical Engineering</option>
                                    <option value="auto_electrics" class="txt_field">Auto Electrics</option>
                                    <option value="motor_mech" class="txt_field">Motor Mechanics</option>
                                    <option value="boiler_making" class="txt_field">Boiler Making</option>
                                    <option value="fabrication" class="txt_field">Fabrication</option>
                                    <option value="carpentry" class="txt_field">Carpentry</option>
                                    <option value="horticulture" class="txt_field">Horticulture</option>
                                    <option value="building" class="txt_field">Building</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-5">
                                <select class="custom-select d-block w-200" id="level" name="level" required>
                                    <option value="">Level*</option>
                                    <option value="hnd" class="txt_field">HND</option>
                                    <option value="nd3" class="txt_field">ND3</option>
                                    <option value="nd2" class="txt_field">ND2</option>
                                    <option value="nd1" class="txt_field">ND1</option>
                                    <option value="nc" class="txt_field">NC</option>
                                    <option value="other" class="txt_field">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-5">
                                <select class="custom-select d-block w-200" id="intake" name="intake" required>
                                    <option value="">Intake*</option>
                                    <option value="hnd" class="txt_field">January</option>
                                    <option value="nd3" class="txt_field">May</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-5">
                                <select class="custom-select d-block w-200" id="intake_year" name="intakeyear" required>
                                    <option value="">Intake Year*</option>
                                    <option value="2020" class="txt_field">2020</option>
                                    <option value="2019" class="txt_field">2019</option>
                                    <option value="2018" class="txt_field">2018</option>
                                    <option value="2017" class="txt_field">2017</option>
                                    <option value="2016" class="txt_field">2016</option>
                                    <option value="2015" class="txt_field">2015</option>
                                    <option value="2014" class="txt_field">2014</option>
                                    <option value="2013" class="txt_field">2013</option>
                                    <option value="2012" class="txt_field">2012</option>
                                    <option value="2011" class="txt_field">2011</option>
                                    <option value="2010" class="txt_field">2010</option>
                                </select>
                            </div>
                            <button class="btn btn-outline-success btn-md float-right ml-3 mb-4 mt-5" type="submit" name="sregister">Register</button>
                        </div>
                    </form>

                </main>';
                }
                ?>

                <?php
                if (isset($_POST['sregs'])) {

                    echo '<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary mt-4">
                    <div class="d-flex container mt-5 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
                        <h3 class="h3 text-light">Registry</h3>
                    </div>
                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                </main>';
                }
                ?>

                <?php
                if (isset($_POST['signed'])) {

                    echo '<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary mt-4">
                    <div class="d-flex container mt-5 justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
                        <h3 class="h3 text-light">Signed Up Students</h3>
                    </div>
                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                </main>';
                }
                ?>
            </div>
        </div>
    </body>
</html>