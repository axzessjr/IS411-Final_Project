<?php
    session_start();
    include('connectdb.php');

    $errors = array();

    include("checkLoginOk.php");

    if (isset($_POST['edit_user'])) {
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $firstname = mysqli_real_escape_string($connect, $_POST['fname2']);
        $lastname = mysqli_real_escape_string($connect, $_POST['lname2']);
        $institute = mysqli_real_escape_string($connect, $_POST['ins2']);
        $password_1 = mysqli_real_escape_string($connect, $_POST['repw2']);
    
        $staff = 0;

    
        $user_query = "SELECT * FROM user WHERE email = '$email' ";
        $dbUser = mysqli_query($connect, $user_query);
        $arrUser = mysqli_fetch_assoc($dbUser);

        if(count($errors) == 0 ) {
            $password = md5($password_1); 
			 
            $user = "UPDATE `user` SET 
                        `firstname` = '$firstname',
                        `lastname` = '$lastname',
                        `institute` = '$institute',
                        `password` = '$password',
                        `is_staff` = '$staff' 
                        WHERE `email` = '$email' " ;
            mysqli_query($connect, $user)
				or die("Ploblem reading table: ". mysqli_error($connect));

            echo "<script> location.href = 'editacount.php'; </script>";
        
        }else {
            $_SESSION['error'] = $errors;
            
            echo "<script> location.href = 'testedituser.php'; </script>";
        }
    }

?>
