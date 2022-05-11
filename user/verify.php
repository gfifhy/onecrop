<?php
session_start();
    include '../include/conn.php';
    include '../include/functions.php';

    if(isset($_SESSION['user_email'])){
        $email = $_SESSION['user_email'];
        
        


        if($_SESSION['user_type'] == "Farmer"){
            
            if(selectData("seller", "verified", "email", $_SESSION['user_email']) == "Yes"){
                
                if($_SESSION['user_type'] == "Farmer"){
                    header('location: ../seller');
                }
                elseif($_SESSION['user_type'] == "Buyer"){
                    header('location: ../marketplace');
                }
                else{
                    echo "Error!";
                }
            }
            if(isset($_POST['resend'])){
                $email = $_SESSION['user_email'];
                $vcode = md5(time() . $email);
                $result = $conn->query("UPDATE `seller` SET vcode = '$vcode' WHERE email = '$email'");
                header("location: sendemail.php");
            }
        }



        if($_SESSION['user_type'] == "Buyer"){
            
            if(selectData("buyer", "verified", "email", $_SESSION['user_email']) == "Yes"){
                if($_SESSION['user_type'] == "Farmer"){
                    header('location: ../seller');
                }
                elseif($_SESSION['user_type'] == "Buyer"){
                    header('location: ../marketplace');
                }
                else{
                    echo "Error!";
                }
            }
            if(isset($_POST['resend'])){
                $email = $_SESSION['user_email'];
                $vcode = md5(time() . $email);
                $result = $conn->query("UPDATE `buyer` SET vcode = '$vcode' WHERE email = '$email'");
                header("location: sendemail.php");
            }
        }


        





        
    }
    else{
        header("location: ../user/");
        $_SESSION['othererror'] = "Log in first";
    }

?>











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
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
<form method="post">
    <div class="uk-inline">
        <div class="vh-100 vw-100">
            <div class="uk-position-center uk-padding">
                <div class=" uk-flex-center uk-grid uk-grid-stack" uk-grid="">
                    <div class="uk-first-column">
                        <div class="container uk-flex uk-flex-center enlarge uk-margin-bottom">
                            <img src="style/images/logo-circle.png" class="logo" alt="logo">
                            <div class="line"></div>
                            <div class="name"> ONE<span>CROP</span></div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover uk-card-body message">
                                <div class="font-bold uk-margin-top-small uk-margin-bottom">
                                    Verify Your Email Address
                                </div>

                                <?php
                                    if(isset($_SESSION['successmessage'])){
                                        echo "<div class=\"uk-alert-primary\" uk-alert><a class=\"uk-alert-close\" uk-close></a>";
                                        echo "<p>".$_SESSION['successmessage']."</p>";
                                        echo "</div>";
                                        unset($_SESSION['successmessage']);
                                    }
                                    elseif(isset($_SESSION['errormessage'])){
                                        echo "<div class=\"uk-alert-danger\" uk-alert><a class=\"uk-alert-close\" uk-close></a>";
                                        echo "<p>".$_SESSION['errormessage']."</p>";
                                        echo "</div>";
                                        unset($_SESSION['errormessage']);
                                    }
                                

                                ?>
                                <div>
                                    A verification link has been sent to:
                                </div>
                                <div class="uk-margin uk-text-center font-bold">
                                <?php
                                if(isset($_SESSION['user_email'])){
                                    echo $_SESSION['user_email'];
                                }
                                ?>
                                </div>
                                <div class="uk-margin-bottom">Please click the button in the message to confirm your email address.</div>

                                    <input type="submit" name="resend" value="Resend Code" class="uk-padding-small uk-flex-right uk-margin-top">
                                    
                                </div>
                                <div class="uk-flex uk-flex-center uk-padding-small uk-margin-top">
                                    <a href="../logout.php" class="uk-text-center">Log out</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>

</html>