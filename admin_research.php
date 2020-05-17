<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        
        echo "<script> alert('You must Log in or Sign up first!'); </script>";

        echo "<script> location.href = 'admin_login.php'; </script>";

    }

   
?>
<?php include "header.php" ?>

<br>

<div class="row">
    <div class="col-md-4">

<div class="online_submission_panel">

    <div class="login-form">
    
<h3>Research view(Admin)</h3> <hr>
    
        
    
        <?php 
    
        $sql1 = "SELECT * FROM user, register WHERE user.user_id = register.user_id AND email = '$_SESSION[email]'";
        $query = mysqli_query($connect, $sql1); 

         while ($arrRecords = mysqli_fetch_array($query)) {

                     $_SESSION['user_id'] = $arrRecords["user_id"];
                     $_SESSION['firstname'] = $arrRecords["firstname"];
                     $_SESSION['lastname'] = $arrRecords["lastname"];
                    
                     $_SESSION['attendance_type'] = $arrRecords["attendance_type"];

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

<?php

    $sql1 = "SELECT * FROM research";
            
    $query1 = mysqli_query($connect, $sql1) or die("SQL errors :" . mysqli_error($connect));

?>





<div class="online_submission_form" style="width: auto;">


<form method="post" action="admin_research.php">
    
        
        <table>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Track</th>
                                
                                <th>File</th>
                                <th>Uploaded date</th>
                                <th>Status</th>

                            </tr>
            
                            <?php
            
                             while ($arrRecords = mysqli_fetch_array($query1)) {
                                 
                                 
                                echo "
                                
                                        <tr>
                                            <td>$arrRecords[research_id]</td>
                                            <td>$arrRecords[title]</td>
                                            <td>$arrRecords[track]</td>
                                            <td><a href='$arrRecords[file_path]'>$arrRecords[file_path]</a></td>
                                            <td>$arrRecords[upload_date]</td>
                                            <td>$arrRecords[status]</td>
                                            <td><button type='submit' name='approve$arrRecords[research_id]' class='btn btn-success'>Approve</button></td>
                                            <td><button type='submit' name='reject$arrRecords[research_id]' class='btn btn-danger'>Reject</button></td>
                                        </tr>
                                
                                
                                ";
                                 
                                 
                                 if(isset($_POST["approve$arrRecords[research_id]"])){
                                     
                                     
                                     $sql2 = "UPDATE research SET status='approved' WHERE research_id='$arrRecords[research_id]'";
                                     
                                     mysqli_query($connect, $sql2) or die("SQL errors :" . mysqli_error($connect));
                                     
                                     echo "<script> location.href = 'admin_research.php'; </script>";
                                     
                                     
                                 }
                                 
                                 if(isset($_POST["reject$arrRecords[research_id]"])){
                                     
                                     
                                     $sql3 = "UPDATE research SET status='rejected' WHERE research_id='$arrRecords[research_id]'";
                                     
                                     mysqli_query($connect, $sql3) or die("SQL errors :" . mysqli_error($connect));
                                     
                                     echo "<script> location.href = 'admin_research.php'; </script>";
                                     
                                     
                                 }

                    

                                
                             }
            
            
                            ?>
                        

                           

                           


        </table>
    
    </form>
    
    
</div>
        
    </div>        
    
</div>    
    


<?php include "footer.php" ?>












































