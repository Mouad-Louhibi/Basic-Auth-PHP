<?php
session_start();
?>


<html>

<head>
    <title></title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
</body>

</html>