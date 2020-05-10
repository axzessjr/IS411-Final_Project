<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>
<?php include "header.php"?>


<style>
th, td{
	padding: 10px;
}
</style>

<body>

<div class="login-form"><br>
<FORM METHOD="POST" ACTION="<?php echo$_SERVER['PHP_SELF']; ?>">
<CENTER>
<div style="width:300px;">

	<h2 class="text-center">EDIT ACCOUNT</h2>
<BR>
<TABLE>
<TR>
	<TD>First Name</TD>
	<TD><INPUT TYPE="text" NAME="fname" VALUE="<?=$_GET[fname];?>" class="form-control"></TD>
</TR>
<TR>
	<TD>Last Name</TD>
	<TD><INPUT TYPE="text" NAME="lname" VALUE="<?=$_GET[lname];?>" class="form-control"></TD>
</TR>
<TR>
	<TD>Email</TD>
	<TD><INPUT TYPE="email" NAME="email" class="form-control"></TD>
</TR>
<TR>
	<TD>Password</TD>
	<TD><INPUT TYPE="password" NAME="pw" class="form-control"></TD>
</TR>
</TABLE> 
<BR>
	<INPUT TYPE="submit" NAME="submit" VALUE="Confirm" class="btn btn-primary btn-block">

 
</div>
</CENTER>
</FORM>
<br></div>
    <?php include "footer.php"?>
