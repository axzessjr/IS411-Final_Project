<?php
include_once("../connectdb.php");


date_default_timezone_set("Asia/Bangkok");
$arrdate=getdate();
$day=$arrdate["mday"];
$month=$arrdate["month"];
$year=$arrdate["year"];

if (!file_exists("../report/nametag_researcher.doc"))
    $fileTextFileResearcher = fopen ("../report/nametag_researcher.doc",'w');
else
    $fileTextFileResearcher = fopen ("../report/nametag_researcher.doc",'a');


$SQL = "SELECT * FROM user,register WHERE user.user_id = register.user_id AND attendance_type = 'researcher'"; 
$dbRecords = mysqli_query($connect,$SQL);
$numrows = mysqli_num_rows($dbRecords);
for ($i=0; $i < $numrows; $i++) { 
$arrRecord = mysqli_fetch_array($dbRecords);
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher,"\t\tRESEARCHER\r\n");
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher, "Name :  ");
    fwrite($fileTextFileResearcher, $arrRecord[firstname]);
    fwrite($fileTextFileResearcher, "\t");
    fwrite($fileTextFileResearcher, $arrRecord[lastname]);
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher, "Institute :  ");
    fwrite($fileTextFileResearcher, $arrRecord[institute]);
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher,"\t\t\t\tDate printed : ");
    fwrite($fileTextFileResearcher,"$day $month $year");
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher,"------------------------------------------------------------------------------------------------------------------------------------\r\n");
}

// Print Nametag for Audience
if (!file_exists("../report/nametag_audience.doc"))
    $fileTextFileResearcher = fopen ("../report/nametag_audience.doc",'w');
else
    $fileTextFileResearcher = fopen ("../report/nametag_audience.doc",'a');


$SQL = "SELECT * FROM user,register WHERE user.user_id = register.user_id AND attendance_type = 'audience'"; 
$dbRecords = mysqli_query($connect,$SQL);
$numrows = mysqli_num_rows($dbRecords);
for ($i=0; $i < $numrows; $i++) { 
$arrRecord = mysqli_fetch_array($dbRecords);
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher,"\t\tAUDIENCE\r\n");
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher, "Name :  ");
    fwrite($fileTextFileResearcher, $arrRecord[firstname]);
    fwrite($fileTextFileResearcher, "\t");
    fwrite($fileTextFileResearcher, $arrRecord[lastname]);
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher, "Institute :  ");
    fwrite($fileTextFileResearcher, $arrRecord[institute]);
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher,"\t\t\t\tDate printed : ");
    fwrite($fileTextFileResearcher,"$day $month $year");
    fwrite($fileTextFileResearcher, "\r\n");
    fwrite($fileTextFileResearcher,"------------------------------------------------------------------------------------------------------------------------------------\r\n");
}











?>
