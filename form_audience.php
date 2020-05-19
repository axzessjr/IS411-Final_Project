<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>  
<?php include "header.php" ?>

<div class="login-form">
<FORM action='audience.php'>
<B>Choose Audience Type :</B>

    <SELECT NAME="type">
		<OPTION VALUE="t1" >Early bird with workshops</OPTION>
        <OPTION VALUE="t2">Early bird with workshops</OPTION>
		<OPTION VALUE="t3" >Standard with workshops</OPTION>
    </SELECT>
<br><br>
<INPUT TYPE="submit" NAME="oksearch" value ="Search">
<INPUT TYPE="submit" NAME="create" value ="Create">
</FORM><HR>
</div>

<?php include "footer.php" ?>

