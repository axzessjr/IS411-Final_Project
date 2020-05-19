<?php


 $servername = "localhost";
 $user = "root";
 $pw = "root";
 $dbname = "seminardb";

 $connect = new mysqli($servername, $user, $pw, $dbname);   

 if ($connect->connect_error) { 
     
     die("Connection failed: " . $connect->connect_error); 
 
 } 

    session_start(); 
    
    $_SESSION["user_id"];
    $_SESSION["firstname"];
    $_SESSION["lastname"];
    $_SESSION["email"];
    $_SESSION["password"];
    $_SESSION["institute"];
    $_SESSION["is_staff"];
    $_SESSION["attendance_type"];
    $_SESSION["register_id"];
    $_SESSION['error'];
    
    
    

    
 

    
?>

