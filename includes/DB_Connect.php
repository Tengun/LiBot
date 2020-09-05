<?php
$server_name = "localhost";
$username = "root";
$password = "tinotenda";
$db_name = "web_libot_v2";

$conn = mysqli_connect($server_name, $username, $password, $db_name);
if($conn === false){
    die("Connection Failed: ". mysqli_connect_error());
}else{
    //echo 'Connected';
}

