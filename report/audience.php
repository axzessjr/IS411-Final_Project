<?php
include "connectdb.php";

date_default_timezone_set("Asia/Bangkok");
$arrdate=getdate();
$day=$arrdate["mday"];
$month=$arrdate["month"];
$year=$arrdate["year"];

if (!file_exists("../report/audience1.csv"))
    $fileTextFile1 = fopen ("../report/audience1.csv",'w');
else
    $fileTextFile1 = fopen ("../report/audience1.csv",'a');

fwrite($fileTextFile1,"Audience\r\n");
fwrite($fileTextFile1,"Register Type: Early bird with workshops\r\n");
fwrite($fileTextFile1,"As of $day $month $year");
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
    $fileTextFile2 = fopen ("../report/audience2.csv",'w');
else
    $fileTextFile2 = fopen ("../report/audience2.csv",'a');

fwrite($fileTextFile2,"Audience\r\n");
fwrite($fileTextFile2,"Register Type: Early bird without workshops\r\n");
fwrite($fileTextFile2,"As of $day $month $year");
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


if (!file_exists("../report/audience3.csv"))
    $fileTextFile3 = fopen ("../report/audience3.csv",'w');
else
    $fileTextFile3 = fopen ("../report/audience3.csv",'a');

fwrite($fileTextFile3,"Audience\r\n");
fwrite($fileTextFile3,"Register Type: Standard with workshops\r\n");
fwrite($fileTextFile3,"As of $day $month $year");
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
 
?>
