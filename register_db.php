<?php 
    session_start();
    include('connectdb.php');
    
    $errors = array();

    if (isset($_POST['register_user'])) {
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $firstname = mysqli_real_escape_string($connect, $_POST['fname']);
        $lastname = mysqli_real_escape_string($connect, $_POST['lname']);
        $password_1 = mysqli_real_escape_string($connect, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($connect, $_POST['password_2']);
        $staff = 0;
        
        //check match pqassword
        if ($password_1 != $password_2) {
            array_push($errors, "Password not match!");
        }

        $user_check_query = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
        $query = mysqli_query($connect, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // check email in db
            if ($result['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);

             $sql = "INSERT INTO user (firstname, lastname, email, password, is_staff) 
                    
                    VALUES ('$firstname', '$lastname', '$email', '$password', '$staff')";
            
            mysqli_query($connect, $sql);
            $_SESSION['email'] = $email;
            header('location: reg_seminar.php');
        } else {
            $_SESSION['error'] = $errors;
            header("location: register.php");
        }
    }

?>
