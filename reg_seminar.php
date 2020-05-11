<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        
        echo "<script> alert('You must log in or sign up first in order to attending for an academic seminar!'); </script>";

        echo "<script> location.href = 'login.php'; </script>";

    }
    include("connectdb.php");
?>


<?php include "header.php" ?>

<div class="login-form">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<form action="reg_seminar_db.php" method="POST">
    
    <h2 class="text-center">Register</h2><hr>
    <p class="text-center">Attend for an academic seminar.</p><br>
    
    <label>Select your register type :</label>
    <select name="reg_type" onchange="showfee(this.value)" class="form-control" required="required">
        <option value=''>Select your register type</option>
        
    <?php
        $sql = "SELECT * FROM register_type";
        $query_regtype = mysqli_query($connect,$sql);
        $numrows = mysqli_num_rows($query_regtype);

        for ($i=0; $i < $numrows; $i++) {
            $result = mysqli_fetch_row ($query_regtype);
            $strReg_type = $result[0];
        
            echo "<option value='$strReg_type'>$strReg_type</option>";
        }
    ?>
    </select><br><br>
    <!-- fee show here -->
    <p class="badge badge-primary" id="txtHint">Fee will show here...</p><br>
    
    <labeL>Choose your attendace type :</labeL><br>
        <label><input type="radio" name="attendance_type" value="Researcher" required="required"> &nbsp Researcher</label> &nbsp&nbsp&nbsp
        <label><input type="radio" name="attendance_type" value="Audience" required="required"> &nbsp Audience</label>
    <br><br><input type='submit' name='reg_seminar' value='submit' class="btn btn-primary btn-block">
    
     
</form>

<script>
function showfee(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getfee.php?rt="+str, true);
  xhttp.send();
}
</script>

</div>
    
<?php include "footer.php" ?>
