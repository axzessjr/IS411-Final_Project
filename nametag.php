<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>  
<?php include "header.php" ?>
<head>
    <title>booking</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/style.css" rel="stylesheet">
</head>


<?php
if (isset($_GET['oksubmit'])) {

    include_once("connectdb.php");
    date_default_timezone_set("Asia/Bangkok");
    $arrdate=getdate();
    $day=$arrdate["mday"];
    $month=$arrdate["month"];
    $year=$arrdate["year"];

    if (isset($_GET["res"])){
        if (!file_exists("report/nametag_researcher.doc"))
            $fileTextFileResearcher = fopen ("report/nametag_researcher.doc",'w');
        else
            $fileTextFileResearcher = fopen ("report/nametag_researcher.doc",'a');

        $typeResearch = $_GET["res"];
        $SQL = "SELECT * FROM user,register WHERE user.user_id = register.user_id AND attendance_type = '$typeResearch'"; 
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
    }else $typeResearch ="";

// Print Nametag for Audience
    if (isset($_GET["aud"])){
        if (!file_exists("report/nametag_audience.doc"))
            $fileTextFileResearcher = fopen ("report/nametag_audience.doc",'w');
        else
            $fileTextFileResearcher = fopen ("report/nametag_audience.doc",'a');

        $typeAudience = $_GET["aud"];
        $SQL = "SELECT * FROM user,register WHERE user.user_id = register.user_id AND attendance_type = '$typeAudience'"; 
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
    }else $typeAudience ="";
    if ($typeResearch=="" && $typeAudience =="" ){
        echo "</br></br></br></br><div class='alert alert-danger center'><strong><h3>Warning! </h3></strong>Are you sure you do not want to save any name tag files?</div></br>";
    }
    else
    echo "</br></br></br></br><div class='alert alert-success center'><strong><h3>Awesome! </h3></strong>This file is saved in floder 'report'</div></br>";
    echo "<div class='boatbusbts'><a href='form_nametag.php' class='w3-button w3-black'>Go Back</a>  <a href='index.php' class='w3-button w3-black'>Go to Homepage</a></div>";
}

?>
<?php include "footer.php" ?>