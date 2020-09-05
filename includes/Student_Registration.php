<?php

if (isset($_POST['sregister'])) {

    /* generate random password for the user */
    $ran_pass = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789[]-%#*.,';
    $ran_pass1 = str_shuffle($ran_pass);
    $temp_password = substr($ran_pass1, 0, 15);
    /* -------------------------------------- */

    /* generate random username for the user */
    $ran_username = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789';
    $ran_username1 = str_shuffle($ran_username);
    $temp_username = substr($ran_username1, 0, 23);
    /* -------------------------------------- */

    require_once './DB_Connect.php';

    $reg_no = $_POST['regnum'];
    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $gender = $_POST['gender'];
    $id_number = $_POST['idnum'];
    $email = $_POST['mail'];
    $course = $_POST['course'];
    $level = $_POST['level'];
    $intake = $_POST['intake'];
    $intake_year = $_POST['intakeyear'];
    $username = $temp_username;
    $password = $temp_password;

    if (empty($reg_no) || empty($name) || empty($surname) || empty($id_number)) {
        header('location: ./parser.php?x000<0=emptyfields');
        exit();
    } else if (!empty($reg_no) && !empty($name) && !empty($surname) && !empty($id_number)) {
        $sql = "SELECT `Reg Number` FROM `student-registration` WHERE `Reg Number` = ?";
        $prepared_statement = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
            header('location: ./parser.php?ssx000<0=select_sql');
            exit();
        } else {
            mysqli_stmt_bind_param($prepared_statement, "s", $reg_no);
            mysqli_stmt_execute($prepared_statement);
            mysqli_stmt_store_result($prepared_statement);
            $result_set = mysqli_stmt_num_rows($prepared_statement);
            if ($result_set > 0) {

                $_SESSION['sreg_message'] = "Reg Number already in use";
                $_SESSION['sreg_msg_type'] = "danger";

                header('location: ./parser.php?ssx000<0=reg number used');
                exit();
            } else {
                $sql = "INSERT INTO `student-registration`(`Reg Number`, `Name`, `Surname`, `Gender`, `ID Number`, `Email`, `Course`, `Level`, `Intake`, `Intake Year`, `Username`, `Password`) VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)";
                $prepared_statement = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
                    header('location: ./parser.php?x000<0=sql');
                    exit();
                } else {
                    mysqli_stmt_bind_param($prepared_statement, "ssssssssssss", $reg_no, $name, $surname, $gender, $id_number, $email, $course, $level, $intake, $intake_year, $username, $password);
                    mysqli_stmt_execute($prepared_statement);

                    $_SESSION['sreg_message'] = "Registration successfull!";
                    $_SESSION['sreg_msg_type'] = "success";

                    header('location: ./parser.php?x1>0=registration_success');
                    exit();
                }
            }
        }
    }
} else {
    header('location: ./parser.php');
    exit();
}        