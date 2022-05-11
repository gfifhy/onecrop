<?php
    session_start();
    //INCLUDES
    include '../include/conn.php';
    include '../include/functions.php';
    

    //REDIRECT
    if(isset($_SESSION['user_email'])){
        if($_SESSION['user_type'] == "Farmer"){
            header('location: ../seller');
        }
        elseif($_SESSION['user_type'] == "Buyer"){
            header('location: ../marketplace');
        }
        else{
            echo "Error!";
        }
        if($_SESSION['verified'] == "No"){
        header('location: ../user/verify.php');
        }
    }
    //Session Variable declaration
    $_SESSION['regerror'] = "";
    $_SESSION['regsucc'] = "";
    //If the submit button has been clicked
    if(isset($_POST['submit'])){
        if(isset($_POST['email'])){
            if(isset($_POST['password'])){
                //obtaining the data from the input form We can avoid SQL injection via form by using real_escape_string.
                $email = $conn->real_escape_string($_POST['email']);
                $password = $conn->real_escape_string($_POST['password']);
                $password = md5($password. md5($password).md5($password));
                if(checkUserExistence("seller", "email", $email, "password", $password)){
                    $_SESSION['user_type'] = "Farmer";
                    $_SESSION['user_email'] = $email;
                    header('location: ../seller');
                }
                else if(checkUserExistence("buyer", "email", $email, "password", $password)){
                    $_SESSION['user_type'] = "Buyer";
                    $_SESSION['user_email'] = $email;
                    header('location: ../marketplace');
                }
                else{
                    $_SESSION['regerror'] = "Invalid Username and Password";
                }
            }
            else{
                 $_SESSION['regerror'] = "Stop editing the HTML Please.";
            }
        }
        else{
            $_SESSION['regerror'] = "Stop editing the HTML Please.";
        }
    }
?>














<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="style/images/logo-center.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="style/uikit.min.css" />
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="js/app.js" type="text/javascript"></script>

<body>
</body>
<div class="pre-loader">
</div>
<nav class="bg-white" uk-navbar uk-sticky="animation: uk-animation-slide-top">
    <div class="uk-navbar-left">
        <!-- LOGO -->
        <a href="../index.php">
            <div class="container">
                <img src="style/images/logo-circle.png" class="logo" alt="logo">
                <div class="line"></div>
                <div class="name"> ONE<span>CROP</span></div>
            </div>
        </a>
    </div>
    <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li><a href="../index.php#home">Home</a></li>
                <li><a href="../index.php#services">Services</a></li>
                <li><a href="../index.php#about">About</a></li>
                <li><a href="../marketplace">Marketplace</a></li>
            </ul>
        </div>
    <div class="uk-navbar-right uk-margin-right login-link">
        <a href="register.php">Register</a>
        <span class="line"></span>
        <a  class="uk-active" href="login.php">Login</a>
    </div>

</nav>
<div class="login-panel">
    <div class="uk-text-center uk-flex-center" uk-grid>
        <div class="uk-width-1-4@m" >
            <div class="font-bold heading">
            	Login
            </div>
            <?php
            if($_SESSION['regerror'] != ""){
                echo "<div class=\"uk-alert-danger uk-text-left\" uk-alert><a class=\"uk-alert-close\" uk-close></a>";
                echo "<p>".$_SESSION['regerror']."</p>";
                echo "</div>";
            }
            if($_SESSION['regsucc'] != ""){
                echo "<div class=\"uk-alert-success\" uk-alert><a class=\"uk-alert-close\" uk-close></a>";
                echo "<p>".$_SESSION['regsucc']."</p>";
                echo "</div>";
            }
            if(isset($_SESSION['othererror'])){
                echo "<div class=\"uk-alert-danger\" uk-alert><a class=\"uk-alert-close\" uk-close></a>";
                echo "<p>".$_SESSION['othererror']."</p>";
                echo "</div>";
                unset($_SESSION['othererror']);
            }
            ?>
            <form action="" method="post">
            	<label for="email">EMAIL</label>
            	<input type="email" name="email" required>
            	<label for="password">PASSWORD</label>
            	<input type="password" name="password" required>
            	<input type="submit" name="submit" value="Sign In">

                <a href="register.php" class="font-bold" style="float: left;">Create Account</a>
                <a href="recover.php" class="font-bold" style="float: right;" >Forgot Password</a>
            </form>
        </div>
    </div>
</div>

</html>