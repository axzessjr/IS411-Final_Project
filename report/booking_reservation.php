<?php
    
if (!file_exists("../report/booking_reservation.csv"))
    $fileTextFile1 = fopen ("../report/booking_reservation.csv",'w');
else
    $fileTextFile1 = fopen ("../report/booking_reservation.csv",'a');

date_default_timezone_set("Asia/Bangkok");
$arrdate=getdate();
$day=$arrdate["mday"];
$month=$arrdate["month"];
$year=$arrdate["year"];
   
include "../connectdb.php";
$SQLhotel = "SELECT * FROM hotel GROUP BY hotel_name";
$dbHotel = mysqli_query($connect,$SQLhotel);
$num = mysqli_num_rows($dbHotel);
for ($h=0; $h < $num; $h++) { 
$arrHotelRecord = mysqli_fetch_array($dbHotel);
// echo $arrHotelRecord[hotel_name];
fwrite($fileTextFile1, ",");
fwrite($fileTextFile1,"Hotel : $arrHotelRecord[hotel_name]");
fwrite($fileTextFile1,"\r\n");
fwrite($fileTextFile1, ",");
fwrite($fileTextFile1,"Booking Reservation\r\n");
fwrite($fileTextFile1, ",");
fwrite($fileTextFile1,"As of $day $month $year");
fwrite($fileTextFile1,"\r\n");
fwrite($fileTextFile1,"Booking ID,Firstname,Lastname,Number of Rooms, Booking Time\r\n");

$SQL = "SELECT * FROM booking,hotel WHERE booking.hotel_id = hotel.hotel_id AND hotel_name = '$arrHotelRecord[hotel_name]' "; 
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



}

if (!fclose($fileTextFile1))
    echo "<p>Error closing file!</p>";
 
?>

