<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>  
<?php include "header.php" ?>

<div class="login-form">
<FORM action='BookingReservation.php'>
<B>Choose Hotel :</B>

<input list="listhotelname" name="hotelname" value='<?php echo $_GET["hotelname"]?>' required >
<datalist id="listhotelname" >
<?php
     include "connectdb.php";
     $SQLhotel = "SELECT hotel_name FROM hotel GROUP BY hotel_name";
     $dbhotelname = mysqli_query($connect, $SQLhotel);
      while ($arrRecords = mysqli_fetch_row($dbhotelname)){
        foreach($arrRecords as $showhotelname)
        echo "<OPTION VALUE='" . $showhotelname . "' " ?><?php if($_GET["hotelname"]==$showhotelname) echo 'selected'; 
        ?><?php echo">" . $showhotelname . "</OPTION>";}?>  
</datalist><br>



<br><INPUT TYPE="submit" NAME="oksearch" value ="Search" class="btn btn-primary>
<INPUT TYPE="submit" NAME="okprint" value ="Create Report" class="btn btn-primary>
</FORM><HR>
</div>

<?php include "footer.php" ?>
