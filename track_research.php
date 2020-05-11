
<?php 
    
        $sql1 = "SELECT * FROM user, user_has_research, research 
        
                 WHERE user_has_research.user_id = user.user_id AND user_has_research.research_id = research.research_id
                
                 AND user.user_id = '$_SESSION[user_id]'";


         $query = mysqli_query($connect, $sql1) or die("SQL errors : " . mysqli_error($connect)); 

         $research_id;
         $title;
         $track;
         $status;
         $date;

         while ($arrRecords = mysqli_fetch_array($query)) {

                     $_SESSION['user_id'] = $arrRecords["user_id"];
                     $research_id = $arrRecords["research_id"];
                     $title = $arrRecords["title"];
                     $track = $arrRecords["track"];
                     $status = $arrRecords["status"];
                     $date = $arrRecords["upload_date"];

              }
    

          if ($_SESSION['attendance_type'] != "Researcher") {
        
                echo "<script> alert('You must attend a seminar as a Researcher!'); </script>";

                echo "<script> location.href = 'index.php'; </script>";

          }
    
    
        ?>

    <form method="post" action="online_submission.php" enctype="multipart/form-data">
        
        <p>Your research has been submitted. <br>Wait for admin to accept your work.</p>
        
        
        <div class="alert alert-warning" role="alert">
  
            <label> <b>Status : </b><?php echo $status; ?> </label> 
            
        </div>
        
        <hr>
    
        
        <label> <b>Title : </b><?php echo $title; ?> </label><br>
        
        <label> <b>Track : </b><?php echo $track; ?> </label><br>
        
        <label> <b>Uploaded time : </b><?php echo $date; ?> </label><br>
        
        
        
        
           
   
    
    </form>





















































