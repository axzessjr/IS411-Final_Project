<!DOCTYPE html>

<?php include "connectdb.php" ?>

<html>

<head>

    <meta charset="UTF-8">

    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

    <title>Login</title>

    <script src="js/jquery.min.js"> </script>

    <script src="js/bootstrap.min.js"> </script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Vendor CSS Files -->

  <link href="vendor/animate.css/animate.css" rel="stylesheet">

  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">

  <link href="vendor/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">        

  <link href="vendor/bootstrap/css/bootstrap-grid.min.css.map" rel="stylesheet">

  <link href="vendor/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet">

  <link href="vendor/bootstrap/css/bootstrap-reboot.min.css.map" rel="stylesheet">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">        

  <link href="vendor/bootstrap/css/bootstrap.min.css.map" rel="stylesheet">

  <link href="vendor/boxicons/css/animations.css" rel="stylesheet">

  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="vendor/boxicons/css/transformations.css" rel="stylesheet"> 

  <link href="vendor/boxicons/fonts/boxicons.eot" rel="stylesheet">

  <link href="vendor/boxicons/fonts/boxicons.svg" rel="stylesheet">

  <link href="vendor/boxicons/fonts/boxicons.ttf" rel="stylesheet">

  <link href="vendor/boxicons/fonts/boxicons.woff" rel="stylesheet">     

  <link href="vendor/boxicons/fonts/boxicons.woff2" rel="stylesheet">     

  
<link href="vendor/icofont/icofont.min.css" rel="stylesheet">

  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">

  <link href="vendor/venobox/venobox.css" rel="stylesheet">

  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">



  <!-- Template Main CSS File -->

  <link href="css/style.css" rel="stylesheet">

    

  <!-- Vendor JS Files -->

  <script src="vendor/jquery/jquery.min.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="vendor/php-email-form/validate.js"></script>

  <script src="vendor/jquery-sticky/jquery.sticky.js"></script>

  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="vendor/venobox/venobox.min.js"></script>

  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>



  <!-- Template Main JS File -->

  <script src="js/main.js"></script> 
    
</head>

<style>

	.login-form {

		width: 340px;

    	margin: 50px auto;

	}

    .login-form form {

    	margin-bottom: 15px;

        background: #f7f7f7;

        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

        padding: 30px;

    }

    .login-form h2 {

        margin: 0 0 15px;

    }

    .form-control, .btn {

        min-height: 38px;

        border-radius: 2px;

    }

    .btn {        

        font-size: 15px;

        font-weight: bold;

    }
    
    .head{
    background-color: #35322d;    
    }
	
  table, th, td {
    background-color:  lightgrey;
    border: 2px solid black;
    text-align: center;
    padding: 10px;
    margin-left:auto; 
    margin-right:auto;
    font-weight: bold
    } 
    th, td:hover {
    background-color: grey;  }
	
  .boatbusbts{
    background-color:  #fffaf3;
    text-align: center;
    padding: 10px;
    margin-left:auto; 
    margin-right:auto;
    font-weight: bold
    } 

</style>

<body>
    
 <!--Header-->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>Academic Seminar</span></a></h1>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">หน้าหลัก</a></li>
          <li><a href="">ตรวจสอบสถานะงานวิจัย</a></li>
          <li><a href="">ข้อมูลโรงแรมและสถานที่พัก</a></li>
            
            <?php
            
                if($_SESSION["email"] != ""){
                    
                    echo "  <li><a href='editaccount.php'>แก้ไขข้อมูลส่วนตัว</a></li>
                            <li><a href='logout.php'>ออกจากระบบ</a></li>      ";
                    
                } else {
                    
                    echo "<li><a href='login.php'>เข้าสู่ระบบ</a></li>";
                    
                    
                }
            
            
            ?>
            
            

        
        </ul>
      </nav>
    </div>
  </header>

<div class="head">
    
    <?php
    
        $pagename = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
        
        if($pagename != "index.php"){
            
            echo "<br><br><br><br><br><br><br><br>";
            
        }
    
    ?>
    
    
</div>


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
