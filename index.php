<!DOCTYPE html>
<head>
    <title>booking form</title>
</head>
<body>
    <form method="GET" action="booking.php">
        Firstname: <INPUT TYPE="text" NAME="firstname"><br/>
        Lastname: <INPUT TYPE="text" NAME="lastname"><br/>
        Room type: <select id="room_type" name="room_type"> 
                    <option value="Standard">Standard</option>
                    <option value="Deluxe">Deluxe</option>
                  </select><br/>
        Bed type: <select id="bed_type" name="bed_type">
                    <option value="Single">Single</option>
                    <option value="Twin">Twin</option>
                  </select><br/>
        Brakefast : <INPUT TYPE="radio" NAME="r1" value='1'> Yes <INPUT TYPE="radio" NAME="r1" value='0'> No<br/>
        Room reserve : <INPUT TYPE="number" NAME="room_counts"><br/>
        
        <INPUT TYPE="submit" name='submit' >
    </form>
</body>
</html>