<?php

if (!file_exists("report/audience1.csv"))
    $fileTextFile1 = fopen ("report/audience1.csv",'w');
else
    $fileTextFile1 = fopen ("report/audience1.csv",'a');

fwrite($fileTextFile1,"Audience\r\n");
fwrite($fileTextFile1,"UserID,Firstname,Lastname,Institue\r\n");
   
include "connectdb.php";
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
 
?>
