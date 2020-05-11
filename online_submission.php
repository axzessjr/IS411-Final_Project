<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        
        echo "<script> alert('You must Log in or Sign up first!'); </script>";

        echo "<script> location.href = 'login.php'; </script>";

    }

   
?>
<?php include "header.php" ?>

<br>

<div class="row">
    <div class="col-md-4">

<div class="online_submission_panel">

    <div class="login-form">
    
<h3>Online Research Submission</h3> <hr>
    
        
    
        <?php 
    
        $sql1 = "SELECT * FROM user, register WHERE user.user_id = register.user_id AND email = '$_SESSION[email]'";
        $query = mysqli_query($connect, $sql1); 

         while ($arrRecords = mysqli_fetch_array($query)) {

                     $_SESSION['user_id'] = $arrRecords["user_id"];
                     $_SESSION['firstname'] = $arrRecords["firstname"];
                     $_SESSION['lastname'] = $arrRecords["lastname"];
                    
                     $_SESSION['attendance_type'] = $arrRecords["attendance_type"];

              }
    

          if ($_SESSION['attendance_type'] != "Researcher") {
        
                echo "<script> alert('You must attend a seminar as a Researcher!'); </script>";

                echo "<script> location.href = 'index.php'; </script>";

          }
    
    
        ?>
    
        <p><b>Name</b> : <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p> 

        <p><b>Institute</b> : <?php echo $_SESSION['institute']; ?></p> 

        <p><b>E-mail</b> : <?php echo $_SESSION['email']; ?></p>
        
        <p><b>Attendance Type</b> : <?php echo $_SESSION['attendance_type']; ?></p>
        
    </div>
    
</div>    

</div>

    <div class="col-md-8">

<div class="online_submission_form">
    
    
        <?php 
    
            $sql = "SELECT * FROM user_has_research WHERE user_id = '$_SESSION[user_id]'";
    
            $check = mysqli_query($connect, $sql);
            $numrows = mysqli_num_rows($check);


            if ($numrows == 1) { 
         
                include "track_research.php";
                
         
            } else {
                
                include "upload_research.php"; 
                
            }
    
    
            
    
    
    
        ?>
    
    
</div> 
        
    </div>        
    
</div>    
    
<?php

    include "connectdb.php";


    if(isset($_POST["submit"])){
        
        $file = $_FILES['file'];
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_error = $_FILES['file']['error'];
        $file_type = $_FILES['file']['type'];
        
        $file_extension = explode('.', $file_name);
        $file_final_extension = strtolower(end($file_extension));
        
        $allowed = array('jpg','jpeg','png','pdf','pptx','doc','docx');
        
        move_uploaded_file($file_tmp, "file_uploads/$file_name");
        
        $file_path = "file_uploads/$file_name";
        $title = mysqli_real_escape_string($connect, $_POST['title']);
        $track = mysqli_real_escape_string($connect, $_POST['track']);
        $status = "pending";
        
        $user_id = $_SESSION["user_id"];
        $research_id;
        
        $sql1 = "INSERT INTO user_has_research (user_id)
        
                 VALUES ('$user_id')";
        
        mysqli_query($connect, $sql1) or die("SQL errors " . mysqli_error($connect));
        
        
        $sql2 = "SELECT research_id FROM user_has_research
        
                 WHERE user_id = '$user_id'";
        
        $select_id = mysqli_query($connect, $sql2) or die("SQL errors " . mysqli_error($connect));
        
        
        while ($arrRecords = mysqli_fetch_array($select_id)) {

                     $research_id = $arrRecords["research_id"];

        }
        
        
        $sql3 = "INSERT INTO research (research_id, title, track, file_path, status) 
                    
                 VALUES ('$research_id' ,'$title', '$track', '$file_path', 'pending')";
            
        mysqli_query($connect, $sql3) or die("SQL errors " . mysqli_error($connect));
        
        
        echo "<script> alert('Congratulation! your research has been added. Wait for admin to accept your work.); </script>";

        echo "<script> location.href = 'online_submission.php'; </script>";
        
   
        
        
    }


?>


<?php include "footer.php" ?>
































