<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>
<?php include "header.php" ?>

<br>

<div class="row">
    <div class="col-md-4">

<div class="online_submission_panel">

    <div class="login-form">
    
<h3>Research Online Submission</h3> <hr>
    
        
    
        <?php 
    
        $sql1 = "SELECT * FROM user WHERE email = '$email'";
        $check = mysqli_query($connect, $sql1); 

         while ($arrRecords = mysqli_fetch_array($check)) {

                     $_SESSION['user_id'] = $arrRecords["user_id"];
                     $_SESSION['firstname'] = $arrRecords["firstname"];
                     $_SESSION['lastname'] = $arrRecords["lastname"];

              }
    
    
    
        ?>
    
        <p><b>Name</b> : <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p> 

        <p><b>Institute</b> : xxx</p> 

        <p><b>E-mail</b> : <?php echo $_SESSION['email']; ?></p>
        
        <p><b>Attendance Type</b> : <?php echo $_SESSION['email']; ?></p>
        
    </div>
    
</div>    

</div>

    <div class="col-md-8">

<div class="online_submission_form">
    
    

    <form method="post" action="online_submission.php" enctype="multipart/form-data">
    
        
        <label> Track :  </label> 
            <select name="track" class="form-control">
                <option value="">Please selected</option>
                <option value="Science and Technology">Science and Technology</option>
                <option value="AI and Machine Learning">AI and Machine Learning</option>
                <option value="Economics">Economics</option>
                <option value="Business">Business</option>
            </select><br>
        
        
        <label>Title : </label> <br>
        
        <textarea name="title" class="form-control" rows="4" cols="50"></textarea> <br>
        
        
        
        <label>Upload Research File : </label> <br>
        
        <input type="file" name="file" class="form-control">
        
        <hr>
    
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit" ><br>
        <button class="btn btn-outline-primary btn-block">Reset</button>
    
    </form>
    
    
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
        
        
    }


?>


<?php include "footer.php" ?>
































