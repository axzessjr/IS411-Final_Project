<!DOCTYPE html>
<head>
    <title>booking</title>
</head>
<body>
<?php
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$room_type = $_GET['room_type'];
$bed_type = $_GET['bed_type'];
$brakefast = $_GET['r1'];
$room_counts = $_GET['room_counts'];

include_once("connectdb.php");

$sql = "INSERT INTO booking (booking_id, register_id, hotel_id, firstname, lastname, room_counts) VALUES ( '','','' ,'$firstname' ,'$lastname' ,'$room_counts')";
$dbInsert = mysqli_query($dbLocalhost, $sql)
    or die("Problem reading table: " . mysqli_error($dbLocalhost));
if($dbInsert){
    echo "Insert successful ";
}
else {
    echo "Insert not successful ";
}

$sql1 = "INSERT INTO room (room_id, room_type, bed_type, breakfast_included) VALUES ( '','$room_type','$bed_type' ,'$brakefast')";
$dbInsert1 = mysqli_query($dbLocalhost, $sql1)
    or die("Problem reading table: " . mysqli_error($dbLocalhost));
if($dbInsert1){
    echo "Insert successful ";
}
else {
    echo "Insert not successful ";
}

?>
</body>
</html>
