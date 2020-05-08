<?

/*

$servername = "localhost";
$user = "root";
$pw = "root";
$dbname = "seminardb";

$connect = mysqli_connect($servername,$user,$pw,$dbname)
       or die ("Connection Failed". mysqli_connect_error());
       
*/

$connect = mysqli_connect("localhost", "root", "root", "seminardb") or die("Could not connect: " . mysqli_connect_errno());
    
?>

