<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT * FROM usertable WHERE name = '$name' && password = '$pass'";
$rule = 'user';

if ($name === 'Mouad' && $pass === 'Louhibi') {
    $rule = 'admin';
}

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {

    $lg = "UPDATE currentuser
           SET name = '$name', password = '$pass', rule = '$rule'
           WHERE id = 1";
    $con->query($lg);

    $_SESSION['username'] = $name;
    header('Location:home.php');
} else {
    header('Location:login.php');
}
