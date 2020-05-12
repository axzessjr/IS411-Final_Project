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
<FORM METHOD="POST" ACTION="testedituser.php">
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
<CENTER>
<div style="width:300px;">

	<h2 class="text-center">EDIT ACCOUNT</h2>
<BR>
<TABLE>
<TR>
	<TD>First Name</TD>
	<TD><INPUT TYPE="text" NAME="fname2" VALUE="<?=$_GET[fname];?>" class="form-control"></TD>
</TR>
<TR>
	<TD>Last Name</TD>
	<TD><INPUT TYPE="text" NAME="lname2" VALUE="<?=$_GET[lname];?>" class="form-control"></TD>
</TR>
<TR>
	<TD>Institute</TD>
	<TD><INPUT TYPE="text" NAME="ins2" VALUE="<?=$_GET[ins2];?>" class="form-control"></TD>
</TR>
<TR>
	<TD>Email</TD>
	<TD><INPUT TYPE="email" NAME="email" VALUE="<?=$_SESSION['email']?>" class="form-control" readonly></TD>
</TR>
<TR>
	<TD>Password</TD>
	<TD><INPUT TYPE="password" NAME="pw2" class="form-control"></TD>
</TR>
<TR>
	<TD>Repassword</TD>
	<TD><INPUT TYPE="password" NAME="repw2" class="form-control"></TD>
</TR>
</TABLE> 
<BR>
	<INPUT TYPE="submit" NAME="edit_user" VALUE="Confirm" class="btn btn-primary btn-block">

 
</div>
</CENTER>
</FORM>
<br></div>
    <?php include "footer.php"?>
