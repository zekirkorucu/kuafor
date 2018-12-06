<?php 

session_start();
 ?>

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
                <h2>Bilgiler</h2>
                
                    <div class="form-group">
                       <label><?php echo $_SESSION['username']; ?></label>
                       
                    </div>
                    <div class="form-group">
                       <label>05428932873</label>
                        
                    </div>
                    <div class="form-group">
                       <label>zeki@gmail.com
					</label>
                       
                    </div>
                    <button type="submit" class="btn btn-primary">Randevu Al</button>
               
            </div>
        </div>

    </div>

</div>
</table>
    




</body>
</html>