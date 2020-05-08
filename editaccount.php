<!DOCTYPE html>
<html>
<head lang="en">
<meta charset = "utf=8">
<title> Edit Account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
th, td{
	padding: 10px;
}
</style>

<body>
<?php
include_once("CheckLoginOk.php");
include_once("homepage.php");
?>

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
</body>
</html>

