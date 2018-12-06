
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>



    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login Here</h2>
                <form action="welcome.php" method="post">
                    <div class="form-group">
                       <label>Username</label>
                       <input type="text" name="username" class="form-control" required> 
                    </div>
                    <div class="form-group">
                       <label>Password</label>
                       <input type="password" name="password" class="form-control" required> 
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-md-6 login-right">
                <h2>Register Here</h2>
                <form action="register.php" method="post">
                    <div class="form-group">
                       <label>Username</label>
                       <input type="text" name="username" class="form-control" required> 
                    </div>
                    <div class="form-group">
                       <label>Password</label>
                       <input type="password" name="password" class="form-control" required> 
                    </div>
                    <div class="form-group">
                       <label>Email</label>
                       <input type="text" name="email" class="form-control" required> 
                    </div>
                    <div class="form-group">
                       <label>Tel</label>
                       <input type="text" name="tel" class="form-control" required> 
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>

    </div>

</div>





</body>
</html>