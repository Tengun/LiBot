<?php

session_start();
if (isset($_POST['SignUp'])) {

    require_once './DB_Connect.php';
    $reg_no = $_POST['reg_num'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];


    if (empty($reg_no) || empty($username) || empty($password) || empty($password2)) {

        $_SESSION['message'] = "Fill in all fields*";
        $_SESSION['msg_type'] = "warning";

        header("location: ./Student_SignUp_page.php?ssx000<0=emptyfields");
        exit();
    } else if (!empty($reg_no) && !empty($username) && !empty($password) && !empty($password2)) {
        if ($password !== $password2) {

            $_SESSION['message'] = "Passwords don't match*";
            $_SESSION['msg_type'] = "danger";

            header('location: ./Student_SignUp_page.php?ssx000<0=passwords_mismatch');
            exit();
        } else if ($password == $password2) {

//checking if the user exist in the database(registed_students)           

            $sql = "SELECT `Reg Number` FROM `student-registration` WHERE `Reg Number` = ?";
            $prepared_statement = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
                header('location: ./Student_SignUp_page.php?ssx000<0=select_sql');
                exit();
            } else {
                mysqli_stmt_bind_param($prepared_statement, "s", $reg_no);
                mysqli_stmt_execute($prepared_statement);
                mysqli_stmt_store_result($prepared_statement);
                $result_set = mysqli_stmt_num_rows($prepared_statement);
                if (!$result_set > 0) {

                    $_SESSION['message'] = "Incorrect Credidentials*";
                    $_SESSION['msg_type'] = "danger";

                    header('location: ./Student_SignUp_page.php?ssx000<0=!allowed');
                    exit();
                } else {
//checking if the user exist in the database(signed_up users)

                    $sql = "SELECT `Reg Number`, `Username` FROM `signed_up_students` WHERE `Reg Number` = ? || `Username` = ?";
                    $prepared_statement = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
                        header('location: ./Student_SignUp_page.php?ssx000<0=select_sql');
                        exit();
                    } else {
                        mysqli_stmt_bind_param($prepared_statement, "ss", $reg_no, $username);
                        mysqli_stmt_execute($prepared_statement);
                        mysqli_stmt_store_result($prepared_statement);
                        $result_set = mysqli_stmt_num_rows($prepared_statement);
                        if ($result_set > 0) {
                            
                            $_SESSION['message'] = "Incorrect Credidentials*";
                            $_SESSION['msg_type'] = "danger";
                            
                            header('location: ./Student_SignUp_page.php?ssx000<0=!00001');
                            exit();
                        } else {

//user signs_up updating the database

                            $sql = "UPDATE `student-registration` SET `Username` = ? ,`Password` = ? WHERE `Reg Number` = ?";
                            $prepared_statement = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
                                header('location: ./Student_SignUp_page.php?ssx000<0=update_sql');
                                exit();
                            } else {
                                mysqli_stmt_bind_param($prepared_statement, "sss", $username, $password, $reg_no);
                                mysqli_stmt_execute($prepared_statement);
                                //header('location: ../index.php?x1>0=update_success');
//regno, username & password is put into the database(signed_up)

                                $sql = "INSERT INTO `signed_up_students`(`Reg Number`, `Username`, `Password`) VALUES ( ?, ?, ?)";
                                $prepared_statement = mysqli_stmt_init($conn);
                                if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
                                    header('location: ./Student_SignUp_page.php?ssx000<0=insert_sql');
                                    exit();
                                } else {
                                    mysqli_stmt_bind_param($prepared_statement, "sss", $reg_no, $username, $password);
                                    mysqli_stmt_execute($prepared_statement);

                                    $_SESSION['message'] = "SignUp successfull!";
                                    $_SESSION['msg_type'] = "success";

                                    header('location: ./Student_SignUp_page.php?ssx1>0=student_signed_up_successfully');
                                    exit();
                                }
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    header('location: ../index.php');
    exit();
}    

