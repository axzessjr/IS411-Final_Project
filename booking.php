<!DOCTYPE html>
<html>
<head>
    <title>booking</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
//connectdb
include_once("connectdb.php");


$sql1 = "SELECT * FROM user, register WHERE user.user_id = register.user_id AND email = '$_SESSION[email]'";
$query = mysqli_query($connect, $sql1); 

 while ($arrRecords = mysqli_fetch_array($query)) {
             $_SESSION['reg_id'] = $arrRecords["register_id"];
      }

//variable
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$room_type = $_GET['room_type'];
$bed_type = $_GET['bed_type'];
$brakefast = $_GET['r1'];
$room_counts = $_GET['room_counts'];
$register_id = $_SESSION['reg_id'];
$hotel_id = '1';


//insert booking
$sql = "INSERT INTO booking (register_id, hotel_id, firstname, lastname, room_counts, breakfast_included) 
               
               VALUES ( '$register_id','$hotel_id' ,'$firstname' ,'$lastname' ,'$room_counts', '$brakefast')";

    
    $dbInsert = mysqli_query($connect, $sql)
    or die("Problem reading table: " . mysqli_error($connect));

//insert room
$sql1 = "INSERT INTO room (room_type, bed_type, hotel_id) VALUES ( '$room_type','$bed_type' ,'$hotel_id')";

$dbInsert1 = mysqli_query($connect, $sql1)
    or die("Problem reading table: " . mysqli_error($connect));

//insert result
if($dbInsert1 && $dbInsert){
    echo "Insert successful ";
    echo "<a href='index.php' class='w3-button w3-black'>กลับสู่หน้าหลัก</a>";
}
else {
    echo "Insert not successful ";
    echo "<a href='index.php' class='w3-button w3-black'>จองที่พักใหม่</a>";
}


?>
</body>
</html>
