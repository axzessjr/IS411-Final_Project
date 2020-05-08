<?

$servername = "localhost";
$user = "root";
$pw = "root";
$dbname = "seminardb";

$connect = mysqli_connect($servername,$user,$pw,$dbname)
       or die ("Connection Failed". mysqli_connect_error());
    
?>