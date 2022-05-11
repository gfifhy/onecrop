<?php
    //starting a session
    session_start();
    //INCLUDES
    include_once('../include/conn.php') ;
    include '../include/functions.php';
    //REDIRECT
    if(isset($_SESSION['user_email'])){
        $user_email = $_SESSION['user_email'];
        //checking each table in which the user's information is stored
        if(rowNumber1("buyer", "email", $user_email)>0){
            $_SESSION['user_type'] = "Buyer";
        }
        else if(rowNumber1("seller", "email",$user_email)>0){
            $_SESSION['user_type'] = "Farmer";
        }
        else{
        }

        if($_SESSION['user_type'] == "Farmer"){
            header('location: ../seller');
            if(selectData("seller","verified", "email" , $_SESSION['user_email'])== "No"){
                header('location: ../user/sendemail.php');
            }
        }
        elseif($_SESSION['user_type'] == "Buyer"){
            header('location: ../marketplace');
            if(selectData("buyer","verified", "email" , $_SESSION['user_email'])== "No"){
                header('location: ../user/sendemail.php');
            }
        }
        else{
            echo "Error!";
        }
        
        if(selectData("users","verified", "email" , $_SESSION['user_email'])== "No"){
        header('location: ../user/sendemail.php');
        }
    }
    //Session variable declaration
    $_SESSION['regerror'] = "";
    $_SESSION['regsucc'] = "";
    

    //If the submit button has been clicked
    if(isset($_POST['submit'])){

        //obtaining the data from the input form We can avoid SQL injection via form by using real_escape_string.
        $user_type = $conn->real_escape_string($_POST['user_type']);
        $fname = $conn->real_escape_string($_POST['fname']);
        $lname = $conn->real_escape_string($_POST['lname']);
        $address = $conn->real_escape_string($_POST['address']);
        $email = $conn->real_escape_string($_POST['email']);
        $cellphone = $conn->real_escape_string($_POST['cellphone']);
        $vcode = md5(time() . $email);
        $password = $conn->real_escape_string($_POST['password']);
        $confirmpassword = $conn->real_escape_string($_POST['confirmpassword']);

        //checking if the password is match
        if($password == $confirmpassword){
            if(strlen($password) > 7){
                    if( !(checkUserExistence("seller", "email", $email, "cellphone", $cellphone) && !(checkUserExistence("buyer", "email", $email, "cellphone", $cellphone)))){
                        $password = md5($password. md5($password).md5($password));

                        if ($user_type == "Buyer") {
                            //inserting user's info in the database table
                            if(insertUser("buyer", $fname, $lname, $email, $cellphone, $address, $password, $vcode)){
                                $_SESSION['user_email'] = $email;
                                header("location: sendemail.php");
                            }
                            else{
                                //Send an error if the page is reloaded
                                $_SESSION['regerror'] = "There was an error. insert";
                            }
                        }
                        else if ($user_type == "Farmer") {
                            if(insertUser("seller", $fname, $lname, $email, $cellphone, $address, $password, $vcode)){
                                $_SESSION['user_email'] = $email;
                                header("location: sendemail.php");
                            }
                            else{
                                $_SESSION['regerror'] = "There was an error. insert";
                            }
                        }
                        else{
                            $_SESSION['regerror'] = "There was an error (User Type)";
                        }
                    }
                    else{
                        $_SESSION['regerror'] = "Either of the email or cellphone number is already registered. Please try another one.";
                    }
                }
                else{
                    $_SESSION['regerror'] = "Password must be at least 8 characters.";
                }
        }
        else{
            $_SESSION['regerror'] = "Password do not match.";
        }
    }
?>














<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <a class="uk-active" href="register.php">Register</a>
        <span class="line"></span>
        <a href="login.php">Login</a>
    </div>
</nav>
<div class="register-panel">
    <div class="uk-text-center uk-flex-center" uk-grid>
        <div class="uk-width-1-2@m" >
            <div class="font-bold heading">
            	Register
            </div>
            <?php
            if($_SESSION['regerror'] != ""){
                echo "<div class=\"uk-alert-danger\" uk-alert><a class=\"uk-alert-close\" uk-close></a>";
                echo "<p>".$_SESSION['regerror']."</p>";
                echo "</div>";
                unset($_SESSION['regerror']);
            }
            if($_SESSION['regsucc'] != ""){
                echo "<div class=\"uk-alert-success\" uk-alert><a class=\"uk-alert-close\" uk-close></a>";
                echo "<p>".$_SESSION['regsucc']."</p>";
                echo "</div>";
                unset($_SESSION['regsucc']);
            }
            ?>
            <form action="" method="post">

                    <div class="uk-flex uk-margin-bottom">
                        <div class="uk-width-1-2 uk-margin-right ">
                            <label><input class="uk-radio uk-margin-small-right" type="radio" name="user_type" value="Buyer" required="">Buyer</label>
                        </div>
                        <div class="uk-width-1-2 uk-margin-right">
                            <label><input class="uk-radio uk-margin-small-right" type="radio" name="user_type" value="Farmer" required="">Farmer</label>
                        </div>
                        
                    </div> 

                <div class="uk-flex">
                    <div class="uk-width-1-2 uk-margin-right">
                        <label for="fname">FIRST NAME</label>
                        <input type="text" name="fname" required>
                    </div>
                    <div class="uk-width-1-2">
                        <label for="lname">LAST NAME</label>
                        <input type="text" name="lname" required>
                    </div>
                </div>
                <div class="uk-flex">
                    <div class="uk-width-3-4 uk-margin-right">
                        <label for="fname">ADDRESS</label>
                        <input type="text" name="address" required>
                    </div>
                    <div class="uk-width-1-4">
                        <label for="birthday">BIRTHDAY</label>
                        <input type="date" name="birthday" required>
                    </div>
                </div>
                <div class="uk-flex">
                    <div class="uk-width-1-2 uk-margin-right">
                        <label for="email">EMAIL</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="uk-width-1-2">
                        <label for="cellphone">CELLPHONE #</label>
                        <input type="text" name="cellphone" required>
                    </div>
                </div>
                
                <div class="password-group">
                    <div class="uk-width-1-2 uk-margin-right">
                        <label for="password">PASSWORD</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="uk-width-1-2">
                        <label for="password">CONFIRM PASSWORD</label>
                        <input type="password" name="confirmpassword" required>
                    </div>
                </div>

                <div class="uk-flex">
                    <div class="uk-width-1-2">
                        <div class="uk-width uk-text-left uk-padding-small uk-padding-remove-left">
                           <a href="login.php" class="font-bold">SIGN-IN INSTEAD</a> 
                        </div>
                    </div>
                    <div class="uk-width-1-2 ">
                        <div class="uk-width-1-2 uk-margin-auto-left">
                            <input type="submit" name="submit" value="Register">
                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>

</html>