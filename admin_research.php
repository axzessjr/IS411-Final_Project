<form method="post" action="admin_panel.php">
    
        <?php

    $sql1 = "SELECT * FROM research";
            
    $query1 = mysqli_query($connect, $sql1) or die("SQL errors :" . mysqli_error($connect));

?>    
    
    
    
        <h3>View Research :</h3> <hr>
    
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
                                            <td>\"$arrRecords[status]\"</td>
                                            <td><button type='submit' name='approve$arrRecords[research_id]' class='btn btn-success'>Approve</button></td>
                                            <td><button type='submit' name='reject$arrRecords[research_id]' class='btn btn-danger'>Reject</button></td>
                                        </tr>
                                
                                
                                ";
                                 
                                 
                                 if(isset($_POST["approve$arrRecords[research_id]"])){
                                     
                                     
                                     $sql2 = "UPDATE research SET status='approved' WHERE research_id='$arrRecords[research_id]'";
                                     
                                     mysqli_query($connect, $sql2) or die("SQL errors :" . mysqli_error($connect));
                                     
                                     echo "<script> location.href = 'admin_panel.php'; </script>";
                                     
                                     
                                 }
                                 
                                 if(isset($_POST["reject$arrRecords[research_id]"])){
                                     
                                     
                                     $sql3 = "UPDATE research SET status='rejected' WHERE research_id='$arrRecords[research_id]'";
                                     
                                     mysqli_query($connect, $sql3) or die("SQL errors :" . mysqli_error($connect));
                                     
                                     echo "<script> location.href = 'admin_panel.php?'; </script>";
                                     
                                     
                                 }

                    

                                
                             }
            
            
                            ?>
                        

                           

                           


        </table>
    
    </form>