<head>
    <title>booking</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

include "header.php";

if (isset($_GET['oksearch'])) {  
    include "connectdb.php";
    echo "<div class = 'boatbusbts'>";
    echo "<h3>Research Details</h3>";
    echo "<table border=1>";
    echo "<tr>
        <td><b> user_id </b></td>
        <td><b> firstname <b></td>
        <td><b> lastname <b></td>
        <td><b> institute <b></td>
        </tr>"; 
    $SQL = "SELECT * FROM user,register WHERE user.user_id = register.user_id AND attendance_type = 'researcher'"; 
    $dbRecords = mysqli_query($connect,$SQL);
    $numrows = mysqli_num_rows($dbRecords);
    for ($i=0; $i < $numrows; $i++) { 
    $arrRecord = mysqli_fetch_array($dbRecords);
    echo "<tr>
    <td> $arrRecord[user_id] </td>
    <td> $arrRecord[firstname] </td>
    <td> $arrRecord[lastname] </td>
    <td> $arrRecord[institute] </td>
    </tr>";
    echo "</tr>";
    }
    echo "</table>";
    echo "Number of Researcher : ". $numrows;
    echo "</div>";
    echo "<div class='boatbusbts'><a href='form_BookingReservation.php' class='w3-button w3-black'>Go Back</a></div>";
}

  
if (isset($_GET['okprint'])) {
if (!file_exists("report/researcher.csv"))
    $fileTextFile1 = fopen ("report/researcher.csv",'w');
else
    $fileTextFile1 = fopen ("report/researcher.csv",'a');

date_default_timezone_set("Asia/Bangkok");
$arrdate=getdate();
$day=$arrdate["mday"];
$month=$arrdate["month"];
$year=$arrdate["year"];

fwrite($fileTextFile1,"Researcher\r\n");
fwrite($fileTextFile1,"As of $day $month $year");
fwrite($fileTextFile1,"\r\n");
fwrite($fileTextFile1,"UserID,Firstname,Lastname,Institute\r\n");
 
$SQL = "SELECT * FROM user,register WHERE user.user_id = register.user_id AND attendance_type = 'researcher'"; 
$dbRecords = mysqli_query($connect,$SQL);
$numrows = mysqli_num_rows($dbRecords);
$sum=0;
for ($i=0; $i < $numrows; $i++) { 
$arrRecord = mysqli_fetch_array($dbRecords);
    fwrite($fileTextFile1, $arrRecord[user_id]);
    fwrite($fileTextFile1, ",");
    fwrite($fileTextFile1, $arrRecord[firstname]);
    fwrite($fileTextFile1, ",");
    fwrite($fileTextFile1, $arrRecord[lastname]);
    fwrite($fileTextFile1, ",");
    fwrite($fileTextFile1, $arrRecord[institute]);
    fwrite($fileTextFile1, "\r\n");
    $sum=$sum+1;
}

fwrite($fileTextFile1, "\r\n");
fwrite($fileTextFile1," Total, $sum");
fwrite($fileTextFile1, "\r\n");

if (!fclose($fileTextFile1))
    echo "<p>Error closing file!</p>";
echo "</br></br></br></br><div class='alert alert-success center'><strong><h3>Awesome! </h3></strong>This file is saved in floder 'report'</div></br>";
echo "<div class='boatbusbts'><a href='index.php' class='w3-button w3-black'>Go to Homepage</a></div>";
}

include "footer.php";
?>
