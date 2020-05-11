<?php
    include("connectdb.php");
    include("header.php");
    $reg_type = $_GET['rt'];
    $sql = "SELECT fee FROM register_type WHERE register_type = '$reg_type'";
    $query = mysqli_query($connect,$sql);
    $fee = mysqli_fetch_row($query);
    echo "<h3>";
    echo $fee[0];
    echo " THB";
    echo "</h3>";
?>
