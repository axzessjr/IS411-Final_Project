<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    //connectdb
    include_once("connectdb.php");

    $sql1 = "SELECT * FROM user, register WHERE user.user_id = register.user_id AND email = '$_SESSION[email]'";
    $query = mysqli_query($connect, $sql1); 

    while ($arrRecords = mysqli_fetch_array($query)) {
            $_SESSION['register_id'] = $arrRecords["register_id"];
            session_write_close();
        }

    if (!isset($_SESSION['register_id'])) {
            echo "<script> alert('You must to register'); </script>";

            echo "<script> location.href = 'reg_seminar.php'; </script>";
        }

    
?>
    <?php include "header.php" ?>
    <div class="login-form">
    <form method="GET" action="booking.php">
        <h2 class="text-center">Booking</h2>   
        Firstname: <INPUT TYPE="text" NAME="firstname" class="form-control"><br/>
        Lastname: <INPUT TYPE="text" NAME="lastname" class="form-control"><br/>
        Room type: <select id="room_type" name="room_type" class="form-control"> 
                    <option value="Standard">Standard</option>
                    <option value="Deluxe">Deluxe</option>
                  </select><br/>
        Bed type: <select id="bed_type" name="bed_type" class="form-control">
                    <option value="Single">Single</option>
                    <option value="Twin">Twin</option>
                  </select><br/>
        Brakefast : <INPUT TYPE="radio" NAME="r1" value='1'> Yes <INPUT TYPE="radio" NAME="r1" value='0'> No<br/><br/>
        Room reserve : <INPUT TYPE="number" NAME="room_counts" min="1" class="form-control"><br/>
        
        <INPUT TYPE="submit" name='submit' class="btn btn-primary btn-block">
    </form>
    </div>
<?php include "footer.php" ?>
