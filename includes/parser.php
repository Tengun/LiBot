<?php
session_start();
if(isset($_SESSION['staff_num'])){
    require './Admin_Portal.php';
    exit();
}else{
    header("location: ../index.php");
    exit();
}