<?
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    include("connectdb.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<form action="reg_seminar_db.php" method="POST">
    <label>Select your register type</label>
    <select name="reg_type" onchange="showfee(this.value)">
        <option value=''>Select your register type</option>
        
    <?
        $sql = "SELECT * FROM register_type";
        $query_regtype = mysqli_query($connect,$sql);
        $numrows = mysqli_num_rows($query_regtype);

        for ($i=0; $i < $numrows; $i++) {
            $result = mysqli_fetch_row ($query_regtype);
            $strReg_type = $result[0];
        
            echo "<option value='$strReg_type'>$strReg_type</option>";
        }
    ?>
    </select>
    <!-- fee show here -->
    <div id="txtHint">Fee will show here...</div>
    <labeL>Choose your attendace type</labeL><br>
        <label><input type="radio" name="attendace_type" value="Researcher">Researcher</label>
        <label><input type="radio" name="attendace_type" value="Audience">Audience</label>
    <input type='submit' name='reg_seminar' value='submit'>
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