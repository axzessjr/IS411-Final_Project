<!DOCTYPE html>
<html>
<head>
    <title>booking</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php include "header.php" ?>
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
             $_SESSION['register_id'] = $arrRecords["register_id"];
      }

//variable
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$room_type = $_GET['room_type'];
$bed_type = $_GET['bed_type'];
$brakefast = $_GET['r1'];
$room_counts = $_GET['room_counts'];
$register_id = $_SESSION['register_id'];
$hotel_id = '1';
    
$room_number = "R-" . rand(10,1000);    


//insert booking
$sql = "INSERT INTO booking (register_id, hotel_id, firstname, lastname, room_counts, breakfast_included) 
               
               VALUES ( '$register_id','$hotel_id' ,'$firstname' ,'$lastname' ,'$room_counts', '$brakefast')";

    
    $dbInsert = mysqli_query($connect, $sql)
    or die("Problem reading table: " . mysqli_error($connect));

//insert room
$sql1 = "INSERT INTO room (room_number, room_type, bed_type, hotel_id) VALUES ('$room_number', '$room_type','$bed_type' ,'$hotel_id')";

$dbInsert1 = mysqli_query($connect, $sql1)
    or die("Problem reading table: " . mysqli_error($connect));

//insert result
if($dbInsert1 && $dbInsert){
    echo "</br></br></br></br><div class='alert alert-success center'><strong><h3>Awesome! </h3></strong>You successfully created your booking</div></br>";
    echo "<div class='boatbusbts'><a href='index.php' class='w3-button w3-black'>Go to Homepage</a></div>";
}
else {
    echo "</br></br></br></br><div class='alert alert-danger'><strong><h3>Danger!</h3></strong> Your booking is not successful</div></br>";
    echo "<div class='boatbusbts'><a href='index.php' class='w3-button w3-black'>Try Again</a></div>";
}


?>
<?php include "footer.php" ?>
</body>
</html>
