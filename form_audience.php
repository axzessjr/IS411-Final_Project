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

<input list="listtype" name="audience" value='<?php echo $_GET["audience"]?>' required >
<datalist id="listtype" >
<?php
     include "connectdb.php";
     $SQL = "SELECT register_type FROM register WHERE attendance_type = 'audience' GROUP BY register_type";
     $db = mysqli_query($connect, $SQL);
      while ($arrRecords = mysqli_fetch_row($db)){
        foreach($arrRecords as $showtype)
        echo "<OPTION VALUE='" . $showtype . "' " ?><?php if($_GET["audience"]==$showtype) echo 'selected'; 
        ?><?php echo">" . $showtype . "</OPTION>";}?>  
</datalist><br>


<br><INPUT TYPE="submit" NAME="oksearch" value ="Search" class="btn btn-primary>
<INPUT TYPE="submit" NAME="okprint" value ="Save Report" class="btn btn-primary>
</FORM><HR>
</div>

<?php include "footer.php" ?>
