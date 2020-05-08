<?php include "header.php" ?>
<?php

$register_id = $_GET['register_id'];

include_once("connectdb.php");

$sql = "SELECT * FROM booking WHERE register_id = '$register_id'";
$dbselect = mysqli_query($connect, $sql)
    or die("Problem reading table: " . mysqli_error($connect));
?>
<div class="btn" ><br>
<?php   
echo "<table>";
echo "<tr><th>Booking ID</th>";
echo "<th>Register ID</th>";
echo "<th>Hotel ID</th>";
echo "<th>Firstname</th>";
echo "<th>Lastname</th>";
echo "<th>Room counts</th></tr>";


while ($arrRecords = mysqli_fetch_array($dbselect)) {
        echo "<tr><td>" . $arrRecords["booking_id"] . "</td>";
        echo "<td>". $arrRecords["register_id"] . "</td>";
        echo "<td>". $arrRecords["hotel_id"] . "</td>";
        echo "<td>". $arrRecords["firstname"] . "</td>";
        echo "<td>". $arrRecords["lastname"] . "</td>";
        echo "<td>". $arrRecords["room_counts"] . "</td></tr>";
}
echo "</table>";
?>
<br></div>
<?php include "footer.php" ?>
