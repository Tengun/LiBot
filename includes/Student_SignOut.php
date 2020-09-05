<?php
if(isset($_POST['Student_SignOut'])){
session_start();
session_unset();
session_destroy();

header("Location: ../index.php");
}else{
    header("Location: ../index.php");
}