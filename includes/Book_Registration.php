<?php

if (isset($_POST['bregister'])) {

    require_once './DB_Connect.php';

    $acc_num = $_POST['acc_num'];
    $isbn = $_POST['isbn'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $edition = $_POST['edition'];

    if (empty($acc_num) || empty($isbn) || empty($name) || empty($author)) {
        header('location: ./parser.php?x000<0=emptyfields');
        exit();
    } else if (!empty($acc_num) && !empty($isbn) && !empty($name) && !empty($author)) {
                $sql = "INSERT INTO `book_registration`(`Accession Number`, `ISBN`, `Name`, `Author`, `Edition`) VALUES (? ,? ,? ,? ,?)";
                $prepared_statement = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($prepared_statement, $sql)) {
                    header('location: ./parser.php?x000<0=sql');
                    exit();
                } else {
                    mysqli_stmt_bind_param($prepared_statement, "sssss", $acc_num, $isbn, $name, $author, $edition);
                    mysqli_stmt_execute($prepared_statement);

                    $_SESSION['breg_message'] = "Registration successfull!";
                    $_SESSION['breg_msg_type'] = "success";

                    header('location: ./parser.php?x1>0=registration_success');
                    exit();
                }
            }
} else {
    header('location: ./parser.php');
    exit();
}       
