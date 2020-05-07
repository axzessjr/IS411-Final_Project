<?php
    session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <title>Register</title>
    <script src="css/jquery.min.js"> </script>
    <script src="css/bootstrap.min.js"> </script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <form action='register_db.php' method='post'>
    <!-- notification error -->
        <?php if (isset($_SESSION['error'])) : ?>
                <h3>
                    <?php 
                        foreach($_SESSION['error'] as $error){ ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>
                           <? echo $error . "<br>";?>
                        </strong>
                        </div>
                        <?
                        }
                        unset($_SESSION['error']);
                    ?>
                </h3>
        <?php endif ?>

    <label>Firstname</label>
    <input type='text' name='fname' required> <br>
    <label>Lastname</label>
    <input type='text' name='lname' required><br>
    <label>Attendance_type</label>
        <select id="attendance_type" name="attendance_type">
        <option value="Researcher">Researcher</option>
        <option value="Audience">Audience</option>
        </select><br>
    <label>Email</label>
    <input type='email' name='email' required><br>
    <label>Password</label>
    <input type='Password' name='password_1' required>
    <label>Re-enter password</label>
    <input type='Password' name='password_2' required><br>

    <input type='submit' name='register_user' value='register'>
    <input type='reset' value='clear'>
    </form>
</body>
</html>