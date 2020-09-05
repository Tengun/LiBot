<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portal</title>
        <meta author="PTec Co.">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="../bootstrap_files/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style portal.css">
        <script type="text/javascript" src="../bootstrap_files/popper.min.js"></script>
        <script type="text/javascript" src="../bootstrap_files/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap_files/bootstrap.min.js"></script>
        <style type="text/css">
            .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-6, .col-md-8 {
                background-color: #34495e;
                color: white;
                line-height: 5em;
                border: 1px solid white;
                height: 5em;
            }
        </style>
    </head>
    <body class="bg-light">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-1 mb-3 bg-dark border-bottom shadow-lg">
            <h5 class="my-3 md-auto font-weight-normal text-light">Li | Bot</h5>
            <nav class="container ml-5">
                <a class="p-3 text-light text-decoration-none" href="#">Books</a>
                <a class="p-3 text-light text-decoration-none" href="#">Stationary</a>
                <a class="p-3 text-light text-decoration-none" href="#">Exams</a>
                <a class="p-3 text-light text-decoration-none" href="#">Results</a>
                <a class="p-3 text-light text-decoration-none" href="#">On Campus</a>
                <a class="p-3 text-light text-decoration-none" href="#">My Account</a>
                <a class="p-3 text-light text-decoration-none" href="#">Help?</a>
            </nav>
            <h5 class="text-light pt-2">Student:<span class="text-muted"><?php echo $_SESSION['Reg_num']?></span></h5>
            <form class="form-group pt-3" action="Student_SignOut.php" method="POST">
                <button class="btn btn-outline-success my-2 my-sm-1 ml-5 text-light" name="Student_SignOut">SignOut</button>
            </form>
        </div>

        <div class="container">
            <div class="dropdown">
                <button type="button" class="btn dropdown-toggle float-right font-weight-bolder" id="dropdowncamp" data-toggle="dropdown">
                    On Campus
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu bg-light" role="menu" aria-labelledby="dropdowncamp"> 
                    <li class="text-center mb-2"><a class="text-success text-decoration-none font-weight-bold" role="menuitem" href="#">Workshops</a></li> 
                    <li class="text-center mb-2"><a class="text-success text-decoration-none font-weight-bold" role="menuitem" href="#">Clubs</a></li>
                    <li class="text-center mb-2"><a class="text-success text-decoration-none font-weight-bold" role="menuitem" href="#">Gigs</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn dropdown-toggle float-right mr-5 font-weight-bolder" id="dropdownresults" data-toggle="dropdown">
                    Results
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu bg-light" role="menu" aria-labelledby="dropdownresults"> 
                    <li class="text-center mb-2"><a class="text-success text-decoration-none font-weight-bold" role="menuitem" href="#">Dates</a></li> 
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn dropdown-toggle float-right mr-5 font-weight-bolder" id="dropdownexam" data-toggle="dropdown">
                    Exam
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu bg-light" role="menu" aria-labelledby="dropdownexam"> 
                    <li class="text-center mb-2"><a class="text-success text-decoration-none font-weight-bold" role="menuitem" href="#">Register</a></li> 
                    <li class="text-center mb-2"><a class="text-success text-decoration-none font-weight-bold" role="menuitem" href="#">Rules & Regulations</a></li>
                    <li class="text-center mb-2"><a class="text-success text-decoration-none font-weight-bold" role="menuitem" href="#">Schedules</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn dropdown-toggle float-right mr-5 font-weight-bolder" id="dropdownbook" data-toggle="dropdown">
                    Book
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu bg-light" role="menu" aria-labelledby="dropdownbook"> 
                    <li class="text-center mb-2"><a class="text-success text-decoration-none font-weight-bold" role="menuitem" href="#">Borrow</a></li> 
                    <li class="text-center mb-2"><a class="text-success text-decoration-none font-weight-bold" role="menuitem" href="#">Return</a></li>
                    <li class="text-center mb-2"><a class="text-success text-decoration-none font-weight-bold" role="menuitem" href="#">Report Lost Book</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>