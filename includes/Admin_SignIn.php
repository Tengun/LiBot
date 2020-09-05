<?php
session_start();
if (isset($_POST['Admin_SignIn'])) {

    require_once '../includes/DB_Connect.php';
    $staff_number = $_POST['staff_num'];
    $username = $_POST['username'];
    $security_phrase = $_POST['sec_phrase'];
    $password = $_POST['password'];


    if (empty($staff_number) || empty($username) || empty($security_phrase) || empty($password)) {
        
        $_SESSION['message'] = "Fill in all fields*";
        $_SESSION['msg_type'] = "warning";
        
        header("location: ./Admin_SignIn_page.php?x000<0=emptyfields&username=".$username."&staff=".$staff_number."&sp=".$security_phrase);
        exit();
    } else if (!empty($staff_number) && !empty($username) && !empty($security_phrase) && !empty ($password)) {
        $sql = "SELECT `Staff Number`, `Username`, `Security_phrase`, `Password` FROM `admin_registration` WHERE `Staff Number` = ? && `Username` = ? && `Security_phrase` = ? && `Password` = ?";
        $prepared_statement = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
            header('location: ./Admin_SignIn_page.php?x000<0=sql');
            exit();
        } else {
            mysqli_stmt_bind_param($prepared_statement, "ssss", $staff_number, $username, $security_phrase, $password);
            mysqli_stmt_execute($prepared_statement);
            $result = mysqli_stmt_get_result($prepared_statement);
            if ($row = mysqli_fetch_assoc($result)) { //checks if the data in database matches with user input data
                
                $_SESSION['staff_num'] = $row['Staff Number'];
                $_SESSION['username'] = $row['Username'];
                $_SESSION['sec_phrase'] = $row['Security_phrase'];
                $_SESSION['password'] = $row['Password'];
                
                header('location: ./parser.php');
                exit();
            } else {
                
                $_SESSION['message'] = "Incorrect Staff Credidentials*";
                $_SESSION['msg_type'] = "danger";
                
                header("location: ./Admin_SignIn_page.php?x000<0=!staff&staff=".$staff_number."&username=".$username."&sp=".$security_phrase);
                exit();
            }
        }
    }
} else {
    header('location: ../index.php');
    exit();
}


