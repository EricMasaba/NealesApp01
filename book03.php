<?php 
  include "__config.php";
  $root="__ROOT__"; 
?>

<html>
  <head>
    <title>Neales (03)| Book Trips | Flex</title>
  	<!-- HEADER REMAINDER -->
  	<?php include "bookingHeaderICO.php"; ?>

  	<link rel="stylesheet" type="text/css" href="assets/css/nealesdest03.css">
  </head>
  <body>

      <!-- JS -->
      <?php include "bookingAssetsJS.php"; ?>

      <!-- CSS -->
      <?php include "bookingAssetsCSS.php"; ?>

      <div class="desktop maincnt " style="width:320px">
        <div class="maincntinner">

		<!-- Booking Header -->
		<?php include "bookingheader.php"; ?>

        <var id="result-container" class="result-container"></var>
 
      	<form id="form-country_v2" name="form-country_v2">
      		    <div class="typeahead__container">
      		        <div class="typeahead__field">
      		 
      		            <span class="typeahead__query">
      		                <input class="js-typeahead-country_v2" name="country_v2[query]" type="search" placeholder="Search" autocomplete="off">
      		            </span>
      		            <span class="typeahead__button">
      		                <button type="submit">
      		                    <i class="typeahead__search-icon"></i>
      		                </button>
      		            </span>
      		 
      		        </div>
      		    </div>
      		</form>

			</div>
		</div>


		  <!-- JS -->
		  <?php include "bookingAssetsJS.php"; ?>

		<script src="assets/js/nealesdest03.js"></script>
	</body>
</html>


