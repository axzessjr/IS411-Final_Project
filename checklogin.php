<?php
    session_start();
    include "connectdb.php";



    if (isset($_POST['login_user'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $password = md5($password);
        $sql1 = "SELECT * FROM user, register WHERE user.user_id = register.user_id AND user.email = '$email' AND user.password = '$password'";
        $check = mysqli_query($connect, $sql1);
        $numrows = mysqli_num_rows($check);

        if ($numrows == 1) {
            
            
              $_SESSION['email'] = $email;
              $_SESSION['password']  = $_POST['password'];
            
              while ($arrRecords = mysqli_fetch_array($check)) {

                     $_SESSION['user_id'] = $arrRecords["user_id"];
                     $_SESSION['firstname'] = $arrRecords["firstname"];
                     $_SESSION['lastname'] = $arrRecords["lastname"];
                     $_SESSION['institute'] = $arrRecords["institute"];
                     $_SESSION['is_staff'] =  $arrRecords["is_staff"]; 
                     $_SESSION['register_id'] = $arrRecords["register_id"]; 
                     $_SESSION["attendance_type"] = $arrRecords["attendance_type"];

              }
            
            
            
            if($_SESSION['is_staff'] == 0){

            echo "<script> alert('You are logging in.'); </script>";    
                
            echo "<script> location.href = 'index.php'; </script>";
                
            }
            
            if($_SESSION['is_staff'] == 1){
                
            echo "<script> alert('You are logging in as Admin.'); </script>";    

            echo "<script> location.href = 'admin_panel.php'; </script>";
                
            }
                
        
        } else {
            $_SESSION['error'] = "Wrong Email or password Login failed";
            header("location: login.php");
        }
    }
?>
