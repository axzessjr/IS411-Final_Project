<?php
    

    session_start();
    session_destroy();


echo "<script> alert('You are logging out.'); </script>";

echo "<script> location.href = 'index.php'; </script>";

?>