<?php include "__config.php"; ?>
<?php include "__core_functions.php"; ?>
<?php include "_pageSetup.php"; ?>

<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

    <head>
        <meta charset="UTF-8">
        <title><?=$firmName?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" href="neales_icon.ico">
        
        <!-- Bootstrap 3.3.2 -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/js/rs-plugin/css/settings.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.timepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css" /> 
        <script type="text/javascript" src="assets/js/modernizr.custom.32033.js"></script>
        <link rel="stylesheet" href="assets/css/styles.css">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="pre-loader">
            <div class="load-con">
                <img src="assets/img/logo_main.png" class="animated fadeInUp" alt="">
                <div class="spinner">
                  <div class="bounce1"></div>
                  <div class="bounce2"></div>
                  <div class="bounce3"></div>
                </div>
            </div>
        </div>


        <header>

          <?php include "nav_main.php"; ?>
          <?php include "revslider.php"; ?>

        </header>

        <div class="wrapper">

            <?php include "section09.php"; ?> <!-- About Us -->
            <?php include "section01.php"; ?><!-- Why Neales  -->
            <?php include "section02.php"; ?><!-- Corporate -->       
            <?php include "section03.php"; ?><!-- Airport -->
            <?php include "section04.php"; ?><!-- Schools -->        
            <?php include "section05.php"; ?><!-- Sponsors -->
            <?php include "section06.php"; ?><!-- Community -->     
            <?php include "section10.php"; ?><!-- Contact -->
            <?php include "section08.php"; ?>        
            <?php // include "section12.php"; ?>  

            <section id="map"></section>

            <?php include "footer.php"; ?>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLgImR83QzBOorVMBjEV5xAVpvG-L5PLw&sensor=false"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/placeholdem.min.js"></script>
        <script src="assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script src="assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
    <!-- Twitter TypeAhead -->
        <script src="//twitter.github.io/typeahead.js/js/handlebars.js"></script>  
        <script src="//twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>   

    <!-- Postcodes -->
        <script src="assets/js/postcodes.min.js"></script>

    <!-- TimePicker & DatePicker -->
        <script src="assets/js/jquery.timepicker.js"></script>
        <script src="assets/js/bootstrap-datepicker.js"></script>        
        <script src="assets/js/scripts.js"></script>
        
        <script>
            $(document).ready(function() {
                appMaster.preLoader();
            });
        </script>
    </body>

</html>
