<?php


 $servername = "localhost";
 $user = "root";
 $pw = "root";
 $dbname = "seminardb";

 $connect = new mysqli($servername, $user, $pw, $dbname);   

 if ($connect->connect_error) { 
     
     die("Connection failed: " . $connect->connect_error); 
 
 } 
 

    
?>

