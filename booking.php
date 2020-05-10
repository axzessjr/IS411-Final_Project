<!DOCTYPE html>
<head>
    <title>booking</title>
</head>
<body>
<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>
<?php
//variable
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$room_type = $_GET['room_type'];
$bed_type = $_GET['bed_type'];
$brakefast = $_GET['r1'];
$room_counts = $_GET['room_counts'];
$register_id = '1';
$hotel_id = '1';

//connectdb
include_once("connectdb.php");

//insert booking
$sql = "INSERT INTO booking (booking_id, register_id, hotel_id, firstname, lastname, room_counts, breakfast_included) 
               
               VALUES ( '999','$register_id','$hotel_id' ,'$firstname' ,'$lastname' ,'$room_counts', '$brakefast')";

    
    $dbInsert = mysqli_query($connect, $sql)
    or die("Problem reading table: " . mysqli_error($connect));

if($dbInsert){
    echo "Insert successful ";
}
else {
    echo "Insert not successful ";
}

//insert room
<<<<<<< HEAD
$sql1 = "INSERT INTO room (room_id, room_number, room_type, bed_type, hotel_id) VALUES ( '62','75','$room_type','$bed_type' ,'$hotel_id')";
=======
$sql1 = "INSERT INTO room (room_id, room_number, room_type, bed_type, hotel_id) VALUES ( '','102','$room_type','$bed_type' ,'$hotel_id')";
>>>>>>> 1154f4d78ff248a486995118aa71d112f51384c8
$dbInsert1 = mysqli_query($connect, $sql1)
    or die("Problem reading table: " . mysqli_error($connect));
if($dbInsert1){
    echo "Insert successful ";
}
else {
    echo "Insert not successful ";
}


?>
</body>
</html>
