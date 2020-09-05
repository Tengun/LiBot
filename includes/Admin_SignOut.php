<?php

if (isset($_POST['Admin_SignOut'])) {
    session_start();
    session_unset();
    session_destroy();
    
    header('location: ../index.php');
    exit();
} else {
    header('location: ../index.php');
    exit();
}
