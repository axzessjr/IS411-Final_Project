<?php 

    session_start();

?>

<?php include "header.php" ?>


<div class="login-form">

    <form action="checklogin.php" method="post">

    <!-- Notification errors login -->

    <?php if (isset($_SESSION['error'])): ?>

            <h3 style='color: red'>

            <?php echo $_SESSION['error'];

                unset($_SESSION['error']);

            ?>

            </h3>

        <?php endif ?>

        <h2 class="text-center">Log in as Admin</h2> <hr>      

        <div class="form-group">

        <label for="email">Email : </label>

            <input type="text" name="email" class="form-control" placeholder="email" required="required">

        </div>

        <div class="form-group">

        <label for="password">Password :</label>

            <input type="password" name="password" class="form-control" placeholder="password" required="required">

        </div>
        
        <hr> 

        <div class="form-group">

            <button type="submit" VALUE="login" NAME="login_user" class="btn btn-primary btn-block">Log in</button>

        </div> 

        <p style='text-align:center'>or</p>

        <a href="admin_register_member.php" class="btn btn-outline-primary btn-block">Sign up as Admin</a>

        <?php if (isset($_SESSION['logout'])): ?>

            <h3 style='color: green'>

            <?php echo $_SESSION['logout'];

                unset($_SESSION['logout']);

            ?>

            </h3>

        <?php endif ?>    

    </form>

</div>

<?php include "footer.php" ?>


