

<?php
if (isset($_GET['search'])) {  
    $HotelName=$_GET["hotelname"];

    include "connectdb.php";
    echo "<div class = 'boatbusbts'>";
    echo "<h3>Hotel : $HotelName</h3>";
    echo "<table border=1>";
    echo "<tr>
        <td><b> booking_id </b></td>
        <td><b> firstname <b></td>
        <td><b> lastname <b></td>
        <td><b> room_counts <b></td>
        <td><b> booking_date <b></td>
        </tr>"; 
    $SQL = "SELECT * FROM booking,hotel WHERE booking.hotel_id = hotel.hotel_id AND hotel_name = '$HotelName' "; 
    $dbRecords = mysqli_query($connect,$SQL);
    $numrows = mysqli_num_rows($dbRecords);
    for ($i=0; $i < $numrows; $i++) { 
    $arrRecord = mysqli_fetch_array($dbRecords);
    echo "<tr>
    <td> $arrRecord[booking_id] </td>
    <td> $arrRecord[firstname] </td>
    <td> $arrRecord[lastname] </td>
    <td> $arrRecord[room_counts] </td>
    <td> $arrRecord[booking_date] </td>
    </tr>";
    echo "</tr>";

    }
    echo "</table><br>";
    echo "Number of Reservations : ". $numrows;
    echo "</div>";
   
}
?>

<?php   
if (isset($_GET['okprint'])) {    
    if (!file_exists("report/booking_reservation.csv"))
    $fileTextFile1 = fopen ("report/booking_reservation.csv",'w');
else
    $fileTextFile1 = fopen ("report/booking_reservation.csv",'a');

date_default_timezone_set("Asia/Bangkok");
$arrdate=getdate();
$day=$arrdate["mday"];
$month=$arrdate["month"];
$year=$arrdate["year"];
$HotelName=$_GET["hotelname"];
include "connectdb.php";

fwrite($fileTextFile1, ",");
fwrite($fileTextFile1,"Hotel : '$HotelName'");
fwrite($fileTextFile1,"\r\n");
fwrite($fileTextFile1, ",");
fwrite($fileTextFile1,"Booking Reservation\r\n");
fwrite($fileTextFile1, ",");
fwrite($fileTextFile1,"As of $day $month $year");
fwrite($fileTextFile1,"\r\n");
fwrite($fileTextFile1,"Booking ID,Firstname,Lastname,Number of Rooms, Booking Time\r\n");

$SQL = "SELECT * FROM booking,hotel WHERE booking.hotel_id = hotel.hotel_id AND hotel_name = '$HotelName' "; 
$dbRecords = mysqli_query($connect,$SQL);
$numrows = mysqli_num_rows($dbRecords);
$sum=0;
for ($i=0; $i < $numrows; $i++) { 
$arrRecord = mysqli_fetch_array($dbRecords);
    fwrite($fileTextFile1, $arrRecord[booking_id]);
    fwrite($fileTextFile1, ",");
    fwrite($fileTextFile1, $arrRecord[firstname]);
    fwrite($fileTextFile1, ",");
    fwrite($fileTextFile1, $arrRecord[lastname]);
    fwrite($fileTextFile1, ",");
    fwrite($fileTextFile1, $arrRecord[room_counts]);
    fwrite($fileTextFile1, ",");
    fwrite($fileTextFile1, $arrRecord[booking_date]);
    fwrite($fileTextFile1, "\r\n");
    $sum=$sum+1;
}

fwrite($fileTextFile1, "\r\n");
fwrite($fileTextFile1," Total of Booking ID, $sum");
fwrite($fileTextFile1, "\r\n");
fwrite($fileTextFile1, "\r\n");
fwrite($fileTextFile1, "\r\n");



if (!fclose($fileTextFile1))
    echo "<p>Error closing file!</p>";

    echo "</br></br></br></br><div class='alert alert-success center'><strong><h3>Awesome! </h3></strong>This file is saved in floder 'report'</div></br>";
echo "<div class='boatbusbts'><a href='index.php' class='w3-button w3-black'>Go to Homepage</a></div>";
}
 
?>



<div class="login-form">
<FORM action='admin_panel.php'>
<B>Choose Hotel :</B><HR>

<input list="listhotelname" name="hotelname" value='<?php echo $_GET["hotelname"]?>' required >
<datalist id="listhotelname" >
<?php
     include "connectdb.php";
     $SQLhotel = "SELECT hotel_name FROM hotel GROUP BY hotel_name";
     $dbhotelname = mysqli_query($connect, $SQLhotel);
      while ($arrRecords = mysqli_fetch_row($dbhotelname)){
        foreach($arrRecords as $showhotelname)
        echo "<OPTION VALUE='" . $showhotelname . "' " ?><?php if($_GET["hotelname"]==$showhotelname) echo 'selected'; 
        ?><?php echo">" . $showhotelname . "</OPTION>";}?>  
</datalist><br>



<br><INPUT TYPE="submit" NAME="search" value ="Search" class="btn btn-primary">
<INPUT TYPE="submit" NAME="okprint" value ="Create Report" class="btn btn-primary">
</FORM>
</div>

