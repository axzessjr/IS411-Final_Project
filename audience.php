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
	$audiencetype=$_GET["type"];
    if ($audiencetype == "t1")
        $audience="Early bird with workshops";
    elseif ($audiencetype == "t2")
        $audience="Early bird without workshops";
    else
        $audience="Standard with workshops";
    include "connectdb.php";
    echo "<div class = 'boatbusbts'>";
    echo "<h3>Audience Details</h3>";
    echo "<table border=1>";
    echo "<tr>
        <td><b> user_id </b></td>
        <td><b> firstname <b></td>
        <td><b> lastname <b></td>
        <td><b> institute <b></td>
        </tr>"; 
    $SQL = "SELECT * FROM user,register WHERE user.user_id = register.user_id AND attendance_type = 'audience' AND register_type ='$audience'"; 
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
    echo "Number of Audience : ". $numrows;
    echo "</div>";
    echo "<div class='boatbusbts'><a href='form_audience.php' class='w3-button w3-black'>Go Back</a></div>";
}

if (isset($_GET['create'])) {

date_default_timezone_set("Asia/Bangkok");
$arrdate=getdate();
$day=$arrdate["mday"];
$month=$arrdate["month"];
$year=$arrdate["year"];

if (!file_exists("report/audience1.csv"))
    $fileTextFile1 = fopen ("report/audience1.csv",'w');
else
    $fileTextFile1 = fopen ("report/audience1.csv",'a');

fwrite($fileTextFile1,"Audience\r\n");
fwrite($fileTextFile1,"Register Type: Early bird with workshops\r\n");
fwrite($fileTextFile1,"As of $day $month $year");
fwrite($fileTextFile1,"\r\n");
fwrite($fileTextFile1,"UserID,Firstname,Lastname,Institue\r\n");

$SQL = "SELECT * FROM user,register WHERE user.user_id = register.user_id AND attendance_type = 'audience' AND register_type ='Early bird with workshops'";
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


if (!file_exists("report/audience2.csv"))
    $fileTextFile2 = fopen ("report/audience2.csv",'w');
else
    $fileTextFile2 = fopen ("report/audience2.csv",'a');

fwrite($fileTextFile2,"Audience\r\n");
fwrite($fileTextFile2,"Register Type: Early bird without workshops\r\n");
fwrite($fileTextFile2,"As of $day $month $year");
fwrite($fileTextFile2,"\r\n");
fwrite($fileTextFile2,"UserID,Firstname,Lastname,Institue\r\n");

$SQL2 = "SELECT * FROM user,register WHERE user.user_id = register.user_id AND attendance_type = 'audience' AND register_type ='Early bird without workshops'"; 
$dbRecords2 = mysqli_query($connect,$SQL2);
$numrows2 = mysqli_num_rows($dbRecords2);
$sum2=0;
for ($i=0; $i < $numrows2; $i++) { 
$arrRecord2 = mysqli_fetch_array($dbRecords2);
    fwrite($fileTextFile2, $arrRecord2[user_id]);
    fwrite($fileTextFile2, ",");
    fwrite($fileTextFile2, $arrRecord2[firstname]);
    fwrite($fileTextFile2, ",");
    fwrite($fileTextFile2, $arrRecord2[lastname]);
    fwrite($fileTextFile2, ",");
    fwrite($fileTextFile2, $arrRecord2[institute]);
    fwrite($fileTextFile2, "\r\n");
    $sum2=$sum2+1;
}

fwrite($fileTextFile2, "\r\n");
fwrite($fileTextFile2," Total, $sum2");
fwrite($fileTextFile2, "\r\n");

if (!fclose($fileTextFile2))
    echo "<p>Error closing file!</p>";    


if (!file_exists("report/audience3.csv"))
    $fileTextFile3 = fopen ("report/audience3.csv",'w');
else
    $fileTextFile3 = fopen ("report/audience3.csv",'a');

fwrite($fileTextFile3,"Audience\r\n");
fwrite($fileTextFile3,"Register Type: Standard with workshops\r\n");
fwrite($fileTextFile3,"As of $day $month $year");
fwrite($fileTextFile3,"\r\n");
fwrite($fileTextFile3,"UserID,Firstname,Lastname,Institue\r\n");

$SQL3 = "SELECT * FROM user,register WHERE user.user_id = register.user_id AND attendance_type = 'audience' AND register_type ='Standard with workshops'"; 
$dbRecords3 = mysqli_query($connect,$SQL3);
$numrows3 = mysqli_num_rows($dbRecords3);
$sum3=0;
for ($i=0; $i < $numrows3; $i++) { 
$arrRecord3 = mysqli_fetch_array($dbRecords3);
    fwrite($fileTextFile3, $arrRecord3[user_id]);
    fwrite($fileTextFile3, ",");
    fwrite($fileTextFile3, $arrRecord3[firstname]);
    fwrite($fileTextFile3, ",");
    fwrite($fileTextFile3, $arrRecord3[lastname]);
    fwrite($fileTextFile3, ",");
    fwrite($fileTextFile3, $arrRecord3[institute]);
    fwrite($fileTextFile3, "\r\n");
    $sum3=$sum3+1;
}

fwrite($fileTextFile3, "\r\n");
fwrite($fileTextFile3," Total, $sum3");
fwrite($fileTextFile3, "\r\n");

if (!fclose($fileTextFile3))
    echo "<p>Error closing file!</p>";    
echo "</br></br></br></br><div class='alert alert-success center'><strong><h3>Awesome! </h3></strong>This file is saved in floder 'report'</div></br>";
echo "<div class='boatbusbts'><a href='index.php' class='w3-button w3-black'>Go to Homepage</a></div>";
}
include "footer.php";
?>


