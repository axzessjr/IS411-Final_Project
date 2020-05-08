<!DOCTYPE html>
<head>
    <title>booking</title>
</head>
<body>
<?php
//variable
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$room_type = $_GET['room_type'];
$bed_type = $_GET['bed_type'];
$brakefast = $_GET['r1'];
$room_counts = $_GET['room_counts'];
$register_id = '2';
$hotel_id = '1';

//connectdb
include_once("connectdb.php");

//insert booking
$sql = "INSERT INTO booking (booking_id, register_id, hotel_id, firstname, lastname, room_counts, breakfast_included) VALUES ( '','$register_id','$hotel_id' ,'$firstname' ,'$lastname' ,'$room_counts', '$brakefast')";
$dbInsert = mysqli_query($connect, $sql)
    or die("Problem reading table: " . mysqli_error($connect));
if($dbInsert){
    echo "Insert successful ";
}
else {
    echo "Insert not successful ";
}

//insert room
$sql1 = "INSERT INTO room (room_id, room_number, room_type, bed_type, hotel_id) VALUES ( '','','$room_type','$bed_type' ,'$hotel_id')";
$dbInsert1 = mysqli_query($connect, $sql1)
    or die("Problem reading table: " . mysqli_error($connect));
if($dbInsert1){
    echo "Insert successful ";
}
else {
    echo "Insert not successful ";
}


//test
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';

?>
</body>
</html>
