<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>  
<?php include "header.php" ?>
    <div class="login-form">
    <h2 class="text-center">Hotel Details</h2>
    <form method="GET" action="view_hotel.php">
        Reg ID: <INPUT TYPE="text" NAME="register_id" class="form-control" ><br/>        
        <INPUT TYPE="submit" name='submit' class="btn btn-primary btn-block" >
    </form>
    </div>
<?php include "footer.php" ?>
