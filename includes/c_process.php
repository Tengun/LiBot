<?php
require_once './includes/DB_Connect.php';

//cd 1

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 1";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['C-code'] = 'info';
}else{
    $_SESSION['C-code'] = 'dark';
}

//cd 2

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 2";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['2C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['2C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['2C-code'] = 'info';
}else{
    $_SESSION['2C-code'] = 'dark';
}

//cd 3

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 3";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['3C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['3C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['3C-code'] = 'info';
}else{
    $_SESSION['3C-code'] = 'dark';
}

//cd 4

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 4";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['4C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['4C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['4C-code'] = 'info';
}else{
    $_SESSION['4C-code'] = 'dark';
}

//cd 5

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 5";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['5C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['5C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['5C-code'] = 'info';
}else{
    $_SESSION['5C-code'] = 'dark';
}

//cd 6

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 6";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['6C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['6C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['6C-code'] = 'info';
}else{
    $_SESSION['6C-code'] = 'dark';
}

//cd 7

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 7";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['7C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['7C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['7C-code'] = 'info';
}else{
    $_SESSION['7C-code'] = 'dark';
}

//cd 8

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 8";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['8C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['8C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['8C-code'] = 'info';
}else{
    $_SESSION['8C-code'] = 'dark';
}

//cd 9

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 9";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['9C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['9C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['9C-code'] = 'info';
}else{
    $_SESSION['9C-code'] = 'dark';
}

//cd 10

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 10";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['10C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['10C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['10C-code'] = 'info';
}else{
    $_SESSION['10C-code'] = 'dark';
}

//cd 11

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 11";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['11C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['11C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['11C-code'] = 'info';
}else{
    $_SESSION['11C-code'] = 'dark';
}

//cd 12

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 12";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['12C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['12C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['12C-code'] = 'info';
}else{
    $_SESSION['12C-code'] = 'dark';
}

//cd 13

$sql3 = "SELECT `Header` FROM `book_cards` WHERE `Card Number` = 13";
$result3 = mysqli_query($conn, $sql3);
$f_result = mysqli_fetch_assoc($result3);
$header = htmlspecialchars($f_result['Header']);
if ($header === 'Most Downloaded*') {
    $_SESSION['13C-code'] = 'primary';
} else if($header === 'Most Read*'){
    $_SESSION['13C-code'] = 'warning';
} else if($header === 'Just In*'){
    $_SESSION['13C-code'] = 'info';
}else{
    $_SESSION['13C-code'] = 'dark';
}