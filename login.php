<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <title>Login</title>
    <script src="js/jquery.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<style>
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
<body>
<div class="login-form">
    <form action="checklogin.php" method="post">
    <!-- Notification errors login -->
    <?php if (isset($_SESSION['error'])): ?>
            <h3 style='color: red'>
            <?php echo $_SESSION['error'];
                unset($_SESSION['error']);
            ?>
            </h3>
        <?php endif ?>
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
        <label for="email">Email</label>
            <input type="text" name="email" class="form-control" placeholder="email" required="required">
        </div>
        <div class="form-group">
        <label for="password">Password</label>
            <input type="text" name="password" class="form-control" placeholder="password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" VALUE="login" NAME="login_user" class="btn btn-primary btn-block">Log in</button>
        </div> 
        <p style='text-align:center'>or</p>
        <a href="register_member.php" class="btn btn-outline-primary btn-block">Sign up</a>
        <?php if (isset($_SESSION['logout'])): ?>
            <h3 style='color: green'>
            <?php echo $_SESSION['logout'];
                unset($_SESSION['logout']);
            ?>
            </h3>
        <?php endif ?>    
    </form>
</div>
</body>
</html>
