<?php

    include("connectdb.php");

if (isset($_POST['reg_seminar'])) {
    $reg_type = mysqli_real_escape_string($connect, $_POST['reg_type']);
    $attendance_type = mysqli_real_escape_string($connect, $_POST['attendance_type']);
    
    $sql = "INSERT INTO register (user_id, register_type, attendance_type) 
            VALUES ('$_SESSION[user_id]','$reg_type','$attendance_type')";
    
    
    mysqli_query($connect, $sql) or die("SQL errors: " . mysqli_error($connect));
    
    
    if($attendance_type=="Researcher"){
    
        echo "<script> alert('You are attending as a researcher. So you must submit you research paper.'); </script>";

        echo "<script> location.href = 'online_submission.php'; </script>";
        
        
    } 
    
    if($attendance_type=="Audience"){
        
        echo "<script> alert('Congratulation! you've already finished everything for attending an academic seminar.); </script>";

        echo "<script> location.href = 'index.php'; </script>";
        
    }
    
}
?>
