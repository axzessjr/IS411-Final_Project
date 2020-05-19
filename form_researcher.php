<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>  
<?php include "header.php" ?>

<div class="login-form">
<FORM action='researcher.php'>
<B>Research Detail :</B>
<br><INPUT TYPE="submit" NAME="oksearch" value ="Search" class="btn btn-primary>
<INPUT TYPE="submit" NAME="okprint" value ="Save Report" class="btn btn-primary>
</FORM>
</div>

<?php include "footer.php" ?>