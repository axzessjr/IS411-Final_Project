<?php
    session_start();
    include('connectdb.php');

    if (isset($_POST['login_user'])){
        $email = $_POST['email'];
        $password = $_POST['email'];

        $password = $md5($password);
        $sql = "SELECT * FROM member WHERE email = '$email' AND password = '$password'";
        $check = mysqli_query($connect, $sql);
        $numrows = mysqli_num_rows($check);

        if ($numrows == 1) {
            $_SESSION['email'] = $email;
            
            header("location: index.php");
        } else {
            $_SESSION['error'] = "Wrong Email or password Login failed";
            header("location: login.php");
        }
    }
?>