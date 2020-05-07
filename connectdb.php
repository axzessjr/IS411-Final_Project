<?

$servername = "localhost";
$user = "root";
$pw = "";
$dbname = "seminardb";

$connect = mysqli_connect($servername,$user,$pw,$dbname)
       or die ("Connection Failed". mysqli_connect_error());
    
?>