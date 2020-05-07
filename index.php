<?
session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

echo "Eha";



?>


<html>

<p>Welcome!</p>

<?php echo $_SESSION['email']; ?>


</html>