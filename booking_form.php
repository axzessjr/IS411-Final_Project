<!DOCTYPE html>
<head>
    <title>booking form</title>
</head>
<body>
    <?php include "header.php" ?>
    <div class="class="login-form"">
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
        Brakefast : <INPUT TYPE="radio" NAME="r1" value='1'> Yes <INPUT TYPE="radio" NAME="r1" value='0'> No<br/>
        Room reserve : <INPUT TYPE="number" NAME="room_counts" class="form-control"><br/>
        
        <INPUT TYPE="submit" name='submit' class="btn btn-primary btn-block">
    </form>
    </div>
<?php include "footer.php" ?>
</body>
</html>
