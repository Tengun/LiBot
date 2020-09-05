<?php
session_start();
if(isset($_SESSION['Reg_num'])){
    require './Portal.php';
    exit();
}else{
    header("location: ../index.php");
    exit();
}
