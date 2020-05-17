<?php
    session_start();
    include "connectdb.php";



    if (isset($_POST['login_user'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $password = md5($password);
        $sql1 = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $check = mysqli_query($connect, $sql1);
        $numrows = mysqli_num_rows($check);

        if ($numrows == 1) {
            
              $_SESSION['email'] = $email;
            
              while ($arrRecords = mysqli_fetch_array($check)) {

                     $_SESSION['user_id'] = $arrRecords["user_id"];
                     $_SESSION['firstname'] = $arrRecords["firstname"];
                     $_SESSION['lastname'] = $arrRecords["lastname"];
                     $_SESSION['institute'] = $arrRecords["institute"];
                     $_SESSION['is_staff'] =  $arrRecords["is_staff"];    

              }
            
            echo "<script> alert('You are logging in.'); </script>";

            echo "<script> location.href = 'index.php'; </script>";
        
        } else {
            $_SESSION['error'] = "Wrong Email or password Login failed";
            header("location: login.php");
        }
    }
?>
