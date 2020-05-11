
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
    
        
        <label> Title : <?php echo $title; ?> </label><br>
        
        <label> Track : <?php echo $track; ?> </label><br>
        
        <label> Uploaded time : <?php echo $date; ?> </label><br>
        
        <label> Status : <?php echo $status; ?> </label> 
           
   
    
    </form>





















































