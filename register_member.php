<?php
    session_start();

?>

<?php include "header.php" ?>
<div class="login-form">
    <form action='register_db.php' method='post'>
    <!-- notification error -->
        <?php if (isset($_SESSION['error'])) : ?>
                <h3>
                    <?php 
                        foreach($_SESSION['error'] as $error){ 
                            
                            echo "
                            
                            <div class='alert alert-danger alert-dismissible fade show'>
                        
                            <button type='button' class='close' data-dismiss='alert'>&times;</button> ";
                        
                            echo "<strong>";
                            
                            echo $error . "<br>";
                        
                            echo " </strong> ";
                        
                            echo "</div>";
                        
                        }
                        unset($_SESSION['error']);
                    ?>
                </h3>
        <?php endif ?>
<h2 class="text-center">Sign Up</h2>
    <label>Firstname</label>
    <input type='text' name='fname' required  class="form-control"> <br>
    <label>Lastname</label>
    <input type='text' name='lname' required  class="form-control"><br>
    <label>Institute</label>
    <input type='text' name='institute' required  class="form-control"><br>
    <label>Email</label>
    <input type='email' name='email' required  class="form-control"><br>
    <label>Password</label>
    <input type='Password' name='password_1' required  class="form-control">
    <label>Re-enter password</label>
    <input type='Password' name='password_2' required  class="form-control"><br>

    <input type='submit' name='register_user' value='register' class="btn btn-primary btn-block">
    <input type='reset' value='clear' class="btn btn-outline-primary btn-block">
    </form>
</div>

<?php include "footer.php" ?>
