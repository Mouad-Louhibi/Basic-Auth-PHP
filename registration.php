<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'userregistration'); //(userregestration :nom base de donne)
$name = $_POST['user']; // post method name
$pass = $_POST['password'];
$s = " select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo "username already taken ";
} else {
    $reg = " insert into usertable(name,password,rule) values ('$name','$pass','user')";
    mysqli_query($con, $reg);
    echo "registration successful";
}
