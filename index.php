<?php
session_start();
include 'koneksi.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUCOTO</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="icon/favicon.png"/>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- mini navbar -->
<div style="background-color: #111111; width:100%; height:20px; margin-top: -20px;">
    <div class="mininavbar">
        Discover The Machine Which Present Freedom For You
    </div>
</div>
<!-- mini navbar -->

<!-- content -->
<section class="content">
    <div class="container container-mid">
        <div class="container container-home1">
            <div class="container">
                <img class="home1" src="img/home/home7.png">
                <div class="home1centered1">
                    Ride Safety Get The Best Bike For Your Comfortable
                    <p class="text1">
                    <a href="tokoproduk.php">Shop Now 
                        <b style="color: #02EF02;">
                            >
                        </b>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content -->
<!-- footer -->
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright © 2020 Ducoto Inc. All rights reserved. | Legal Terms | Privacy Policy | Cookie Policy</small>
    </div>
  </footer>
<!-- footer -->
</body>
</html>

<style scoped lang="scss">
    a.a { font-size:17px; font-weight: bold; margin-top: 3px; }
     .b { margin-top: -1px; }

    .navbar.navbar-default {
        background-color: #99ccff;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .container.container-mid {
        background-color: #222222;
        width: 100%;
        height: auto;
    }
    .container.container-home1 {
        background-color: black;
        width: 102.2%;
        height: 700px;
        margin-left: -15px;
    }
    .home1 {
        width: 118.3%;
        height: 700px;
        margin-left: -105px;
    }
    .home1centered1 {
        text-align: center;
        font-size: 30px;
        color: #C8C8C8;
        text-shadow:  1px 0 #707070, 0 1px #707070, 1px 0 #707070, 0  1px #707070;
        margin:-445 350;
        width: 450px;
        line-height:1.2em;
    }
    .text1 {
        font-size: 15px;
        color: white;
        font-weight: bold;
    }
    .container.container-home2 {
        background-color: black;
        width: 1364px;
        height: 800px;
        margin-top: 15px;
        margin-left: -30px;
    }
    .home2 {
        width: 667px;
        height: 800px;
        margin-left: -100px;
    }
    .home2centered2 {
        position: absolute;
        text-align: center;
        font-size: 30px;
        color: #C8C8C8;
        text-shadow:  1px 0 #707070, 0 1px #707070, 1px 0 #707070, 0  1px #707070;
        margin: -380 5;
        width: 400px;
        line-height:1.2em;
    }
    .home3 {
        width: 667px;
        height: 800px;
        margin-left: 585px;
        margin-top: -800px;
    }
    .home3centered3 {
        position: absolute;
        text-align: center;
        font-size: 30px;
        color: #C8C8C8;
        text-shadow:  1px 0 #707070, 0 1px #707070, 1px 0 #707070, 0  1px #707070;
        margin: -380 725;
        width: 400px;
        line-height:1.2em;
    }
    .fence {
        background-color: #222222;
        width: 18px;
        height: 800px;
        margin-left: 664px;
        margin-top: -800px;
    }
    .mininavbar {
        font-size: 14px; 
        color: white; 
        position: absolute;
        margin-left: 475px;
    }   

    a:link {
        color: white;
    }
    /* visited link */
    a:visited {
        color: white;
    }
    /* mouse over link */
    a:hover {
        color: #02EF02;
        text-decoration: none;
    }
    /* selected link */
    a:active {
        color: blue;
    }

    /* Sticky Footer Classes */

    html,
    body {
    height: 100%;
    color: #888888;
    background-color: #222222;
    }

    #page-content {
    flex: 1 0 auto;
    }

    #sticky-footer {
    flex-shrink: none;
    }

</style>
