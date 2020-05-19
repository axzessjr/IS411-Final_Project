<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        
        echo "<script> alert('You must Log in or Sign up first!'); </script>";

        echo "<script> location.href = 'admin_login.php'; </script>";

    } 

    if ($_SESSION['is_staff']==0) {
        
        echo "<script> alert('You are not Admin!'); </script>";

        echo "<script> location.href = 'index.php'; </script>";

    } 

   
?>
<?php include "header.php" ?>

<br>

<div class="row">
    
    <div class="col-md-2">

        <div class="online_submission_panel">

            <div class="online_submission_form">
            
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

                    <span style="font-size: 12px;">

                    <p><b>Admin Info</b></p>

                    <p><b>Name</b> : <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p> 

                    <p><b>Institute</b> : <?php echo $_SESSION['institute']; ?></p> 

                    <p><b>E-mail</b> : <?php echo $_SESSION['email']; ?></p>

                    <p><b>Attendance Type</b> : <?php echo $_SESSION['attendance_type']; ?></p>

                    </span>    
        
            </div>
    
        </div>    

        <div class="online_submission_form" style="width: 250px;">
        
        
        <form method="get" action="admin_panel.php">
            
              <p>Menu</p><hr>        
        
              <button type='submit' name='research' class='btn btn-info'>Approve Research</button><br><br>
            
            
              <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
                View Report
            
            </button>
  
            <div class="dropdown-menu" style="background-color: white;">
                            
                <button type='submit' name="audience" class="dropdown-item" >Audience</button>
                
                <button type='submit' name="researcher" class="dropdown-item" >Researcher</button>
                
                <button type='submit' name="booking" class="dropdown-item" >Booking Reservation</button>
                    
            </div>
        
            </div><br><br>
            
              <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
                Create Nametag
            
            </button>
  
            <div class="dropdown-menu" style="background-color: white;">
                
                
                <botton class="dropdown-item" >Audience</botton>
                
                <botton class="dropdown-item" >Researcher</botton>
        
    
            </div>
        
            </div>
            
        </form>    
            
        </div>    
    
    </div>

    <div class="col-md-10">







<div class="online_submission_form" style="width: auto;">
    
   <?php  
    
     global $page;
        
            if(empty($page)){
                
                $page = "admin_research.php";
                
            } 
        
            if(isset($_GET['research'])){ 
                
                    $page = "admin_research.php";
            
            } 
            
            if(isset($_GET['audience']) || isset($_GET['oksearch'])){ 
                
                    $page = "form_audience.php";
            
            }
    
            if(isset($_GET['researcher'])){ 
                
                    $page = "researcher.php";
            
            } 
    
            if(isset($_GET['booking']) || isset($_GET['search'])){ 
                
                    $page = "form_BookingReservation.php";
            
            }
            
        
            include "$page";
    
     if(isset($_GET["logout"])){
        
        echo "<script> location.href = 'logout.php'; </script>";
        
    }


 
    
    
    ?>
    
    
</div>
        
    </div>        
    
</div>    
    


<?php include "footer.php" ?>












































