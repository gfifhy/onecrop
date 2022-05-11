<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <nav class="fixed-navbar scrolled uk-visible@m" id="scrolled"  uk-navbar> 
        <div class="uk-navbar-left">
            <!-- LOGO -->
            <a href="">
                <div class="container">
                    <img src="style/images/logo-circle.png" class="logo" alt="logo">
                    <div class="line"></div>
                    <div class="name"> ONE<span>CROP</span></div>
                </div>
            </a>
        </div>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav" uk-scrollspy-nav="closest: li; scroll: true">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="marketplace">Marketplace</a></li>
            </ul>
        </div>

        <div class="uk-navbar-right uk-margin-right login-link">
        	<a href="user/register.php">Register</a>
            <span class="line"></span>
            <a href="user/login.php">Login</a>
        </div>
    </nav>

<div class="vh-100 header" uk-parallax="bgy: -300;" id="home">
    <div class="jumbotron">
        <div uk-scrollspy="cls:uk-animation-fade;delay: 500">
            <div class="jumbotron-text">
                We Prioritize your goods and offer importance to our users
            </div>
            <div class="jumbotron-button">
                <a href="#about" class="jumbotron-link">Learn More</a>
            </div> 
        </div>
    </div>
</div>
<div class="services-panel" id="about">
    <div uk-scrollspy="cls:uk-animation-fade;delay: 1000">
        <div class="services-header">Hi. Hello. <br>How are you?</div>
    </div>
    <div uk-scrollspy="cls:uk-animation-fade;delay: 2000">
        <div class="services-message">
            Welcome to One Crop – come in, click around, make yourself at home. One Crop can be a start-up app for the people who wants to sell and start a business regarding agriculture and bring it to the market. 
            <br><br>
            Enjoy.
            <br><br>
            One Crop.
        </div>
    </div>
    

</div>
</html>