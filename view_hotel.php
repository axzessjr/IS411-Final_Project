<!DOCTYPE html>
<head>
    <title>view hotel</title>
</head>
<body>
<?php
$register_id = $_GET['register_id'];

include_once("connectmydb.php");

$sql = "SELECT * FROM booking WHERE register_id = '$register_id'";
$dbselect = mysqli_query($dbLocalhost, $sql)
    or die("Problem reading table: " . mysqli_error($dbLocalhost));
    
echo "<table>";
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
</body>
</html>