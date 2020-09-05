<?php

if (isset($_POST['SignIn'])) {

    require_once '../includes/DB_Connect.php';
    $reg_no = $_POST['Reg_num'];
    $username = $_POST['Username'];
    $password = $_POST['Pass'];

    $sql = "SELECT `Reg Number`, `Username`, `Password` FROM `signed_up_students` WHERE `Reg Number` = ? && `Username` = ? &&`Password` = ?";
    $prepared_statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
        header('location: ../index.php?slx000<0=sql');
        exit();
    } else {
        mysqli_stmt_bind_param($prepared_statement, "sss", $reg_no, $username, $password);
        mysqli_stmt_execute($prepared_statement);
        $result = mysqli_stmt_get_result($prepared_statement);
        if ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['Reg_num'] = $row['Reg Number'];
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['Password'] = $row['Password'];
            header("location: ./parser_s.php");
            exit();
        } else {
            header("location: ../index.php?slx000<0=!user&reg=" . $reg_no . "&user=" . $username);
            exit();
        }
    }
} else {
    header('location: ../index.php');
    exit();
}