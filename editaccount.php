
<?php include "header.php"?>


<style>
th, td{
	padding: 10px;
}
</style>

<body>


<FORM METHOD="POST" ACTION="<?php echo$_SERVER['PHP_SELF']; ?>">
<CENTER>
<div class="container p-3 my-3 bg-dark text-white" style="width:540px;">

<B>EDIT ACCOUNT INFORMATION</B>
<BR><BR>
<TABLE>
<TR>
	<TD>First Name</TD>
	<TD><INPUT TYPE="text" NAME="fname" VALUE="<?=$_GET[fname];?>"></TD>
</TR>
<TR>
	<TD>Last Name</TD>
	<TD><INPUT TYPE="text" NAME="lname" VALUE="<?=$_GET[lname];?>"></TD>
</TR>
<TR>
	<TD>Email</TD>
	<TD><INPUT TYPE="email" NAME="email"></TD>
</TR>
<TR>
	<TD>Password</TD>
	<TD><INPUT TYPE="password" NAME="pw"></TD>
</TR>
</TABLE> 
<BR>
<TABLE>
<TR>
	<INPUT TYPE="submit" NAME="submit" VALUE="Confirm">
</TR>
</TABLE>

 
</div>
</CENTER>
</FORM>

    <?php include "footer.php"?>
