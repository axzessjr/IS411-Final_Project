<?
    session_start();
    include("connectdb.php");

if (isset($_POST['reg_seminar'])) {
    $reg_type = mysqli_real_escape_string($connect, $_POST['reg_type']);
    $attendance_type = mysqli_real_escape_string($connect, $_POST['attendance_type']);
    
    $sql = "INSERT INTO register VALUES ('','','$reg_type','$attendance_type',)";
    mysqli_query($connect, $sql);
}
?>