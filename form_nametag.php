<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>  
<?php include "header.php" ?>
<div class="login-form">
<FORM action='nametag.php' >
    <B>Choose type of name tag : </B><br>
    <input TYPE= "checkbox" NAME="res" value="researcher" > Researcher<br>
    <input TYPE= "checkbox" NAME="aud" value="audience" > Audience<br><br>
        <INPUT TYPE="submit" NAME="oksubmit" value ="Save Report" class="btn btn-primary btn-block">
</FORM>
</div>



<?php include "footer.php" ?>