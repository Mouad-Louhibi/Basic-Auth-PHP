<html>

<head>
    <title>user login and registration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" ">
    <link rel=" stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <!-- class bootstrap -->
        <div class="login-box">
            <div class="row">
                <div class="col-md-6 ">
                    <h2>login Here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label> User name </label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Password </label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary"> Login </button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h2>Registration</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label> User name </label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Password </label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary"> Register </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>