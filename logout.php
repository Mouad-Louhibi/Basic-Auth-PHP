<?php
require_once 'validation.php';
session_start();

$lg = "UPDATE currentuser
       SET name = '', password = '', rule = 'user'
       WHERE id = 1";
$con->query($lg);

session_destroy();

header('Location:login.php');
