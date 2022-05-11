<?php
    session_start();

    include '../include/conn.php';
    include '../include/functions.php';
    //REDIRECT
    if(isset($_SESSION['user_email'])){
        $email = $_SESSION['user_email'];
        if(rowNumber1("buyer", "email", $email)>0){
            $_SESSION['user_type'] = "Buyer";
        }
        if(rowNumber1("seller", "email",$email)>0){
            $_SESSION['user_type'] = "Farmer";
        }

        if($_SESSION['user_type'] == "Farmer"){
            header('location: ../seller');
            if(selectData("seller","verified", "email" , $email) == "No"){
                header('location: ../user/verify.php');
            }
            $user_id = selectData("seller", "seller_id", "email", $email);
        }
        else if($_SESSION['user_type'] == "Buyer"){
            if(selectData("buyer","verified", "email" , $email) == "No"){
                header('location: ../user/verify.php');
            }
        }
    }
    else{
        $_SESSION['othererror'] = "Log in first";
        header("location: ../user/"); 
    }

        


    

?>





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
    <div class="pre-loader"></div>

    <nav class="fixed-navbar scrolled" id="scrolled"  uk-navbar> 
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
            <ul class="uk-navbar-nav">
                <li><a href="../">Home</a></li>
                <li class="uk-active"><a href="#">Marketplace</a></li>
                <li>
                    <a href="#">Category</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">Grain</a></li>
                            <li><a href="#">Fruits</a></li>
                            <li><a href="#">Vegetables</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="orders.php">My Purchase</a>
                </li>
            </ul>
        </div>

        <div class="uk-navbar-right uk-margin-right">
            <div class="account-dropdown">
        	   <a href="account.php">
                <svg aria-hidden="true" focusable="false" role="presentation" class="icon-nav" viewBox="0 0 64 64"><path class="cls-1" d="M35 39.84v-2.53c3.3-1.91 6-6.66 6-11.41 0-7.63 0-13.82-9-13.82s-9 6.19-9 13.82c0 4.75 2.7 9.51 6 11.41v2.53c-10.18.85-18 6-18 12.16h42c0-6.19-7.82-11.31-18-12.16z"></path></svg>
                </a>
                <ul class="dropdown-content">
                    <li>
                        <a href="profile.php">
                            <span uk-icon="icon: cog;" class="dropdown-icon"></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="../logout.php">
                            <span uk-icon="icon: sign-out;" class="dropdown-icon"></span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <a href="#modal-full" uk-toggle>
            	<svg aria-hidden="true" focusable="false" role="presentation" class="icon-nav"viewBox="0 0 64 64"><path class="cls-1" d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42"></path></svg>
            </a>
            <a href="cart.php">
            	<svg aria-hidden="true" focusable="false" role="presentation" class="icon-nav" viewBox="0 0 64 64"><path class="cls-1" d="M14 17.44h46.79l-7.94 25.61H20.96l-9.65-35.1H3"></path><circle cx="27" cy="53" r="2"></circle><circle cx="47" cy="53" r="2"></circle></svg>
            </a>
        </div>
    </nav>

    <div id="modal-full" class="uk-modal-full uk-modal search" uk-modal >
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle">
            <form class="uk-search uk-search-large" method="get">
                <input class="uk-search-input uk-text-center" type="search" name="search" placeholder="Search" autofocus >
            </form>
        </div>
    </div>


<div class="card top">
    <div class="uk-flex-center" uk-grid>
        <div class="uk-width-3-4@m  card">
          <img src="../images/banner.png" alt="" class="banner"> 
        </div>
    </div>
</div>

<div class="card uk-margin-large-top uk-margin-large-bottom">
    <div class="uk-flex-center uk-grid uk-grid-stack" uk-grid="">
        <div class="uk-width-3-4@m card uk-first-column">
            <div class="uk-h3 font-bold">Products</div>
                <div class="uk-child-width-1-4@m" uk-grid>

                    <?php
                    //check if the search form has a value.
                    if(isset($_GET['search'])){
                        //Obtain the value of the inputted value from a table using the LIKE query. 
                        $query =  "SELECT * FROM products WHERE product_name LIKE '%". $_GET['search'] ."%'";

                        //return
                        $result = $conn->query($query);
                        if(mysqli_num_rows($result) <= 0){
                            echo "<div style=\"font-size: 2em; display: flex; justify-content:center; width:100%;\">No Results Found :< </div>";
                        }
                        while($row = $result->fetch_array()){
                            echo "<a href=\"product.php?id=". $row['product_id'] . "\">";
                            echo "<div class=\"uk-card uk-card-default\">";
                            echo "<div class=\"uk-card-media-top\">";
                            echo "<img class=\"card-cover-photo\" src=\"".$row['cover_photo']."\"></div>";
                            echo "<div class=\"uk-card-body\">";
                            echo "<div class=\"uk-card-title product-name\">".$row['product_name']."</div>";
                            echo "<div class=\"product-price\"><span>₱</span>".$row['price'].".00</div>";
                            echo "<div class=\"ratings\">";
                            echo "<span uk-icon=\"icon: star; ratio: 0.6\"></span><span uk-icon=\"icon: star; ratio: 0.6\"></span><span uk-icon=\"icon: star; ratio: 0.6\"></span><span uk-icon=\"icon: star; ratio: 0.6\"></span><span uk-icon=\"icon: star; ratio: 0.6\"></span><span class=\"number uk-text-middle\">(".rand(10,1000).")</span>";
                            echo "</div></div></div></a>";
                        }
                    }
                    else{
                        $result = $conn->query("SELECT * FROM products WHERE stock>0");
                        while($row = $result->fetch_array()){
                            echo "<a href=\"product.php?id=". $row['product_id'] . "\">";
                            echo "<div class=\"uk-card uk-card-default\">";
                            echo "<div class=\"uk-card-media-top\">";
                            echo "<img class=\"card-cover-photo\" src=\"".$row['cover_photo']."\"></div>";
                            echo "<div class=\"uk-card-body\">";
                            echo "<div class=\"uk-card-title product-name\">".$row['product_name']."</div>";
                            echo "<div class=\"product-price\"><span>₱</span>".$row['price'].".00</div>";
                            echo "<div class=\"ratings\">";
                            echo "<span uk-icon=\"icon: star; ratio: 0.6\"></span><span uk-icon=\"icon: star; ratio: 0.6\"></span><span uk-icon=\"icon: star; ratio: 0.6\"></span><span uk-icon=\"icon: star; ratio: 0.6\"></span><span uk-icon=\"icon: star; ratio: 0.6\"></span><span class=\"number uk-text-middle\">(".rand(10,1000).")</span>";
                            echo "</div></div></div></a>";
                        }
                    }
                        

                    ?>
                            
                                
                                    
                                
                                    
                                    
                                                                    
                                        
                                    



            </div>
        </div>
    </div>
</div>
</body>
</html>