<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<?php
    include("connectdb.php");
    $reg_type = $_GET['rt'];
    $sql = "SELECT fee FROM register_type WHERE register_type = '$reg_type'";
    $query = mysqli_query($connect,$sql);
    $fee = mysqli_fetch_row($query);
    echo "Register fee : ";
    echo "<span class='badge badge-primary'><h6>";
    echo $fee[0];
    echo " THB";
    echo "</span></h6>";
?>
