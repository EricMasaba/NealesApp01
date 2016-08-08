<?php 
	include "__config.php";
	$root="__ROOT__"; 
?>

<!DOCTYPE html>
<html>
	<head>
	  <title>Neales (02) | Book Trips | Flex</title>
	<!-- HEADER REMAINDER -->
		<?php include "bookingHeaderICO.php"; ?>
	<!-- CSS -->
		<?php include "bookingAssetsCSS.php"; ?>

	</head>

	<body>

      <div class="desktop maincnt " style="width:320px">
        <div class="maincntinner">

		<!-- Booking Header -->
		<?php include "bookingheader.php"; ?>

			<form id="form-country_v1" name="form-country_v1">
			    <div class="typeahead__container">
			        <div class="typeahead__field">
			 
			            <span class="typeahead__query">
			                <input class="js-typeahead-country_v1" name="country_v1[query]" type="search" placeholder="Search" autocomplete="off">
			            </span>
			            <span class="typeahead__button">
			                <button type="submit">
			                    <i class="typeahead__search-icon"></i>
			                </button>
			            </span>
			 
			        </div>
			    </div>
			</form>

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

		<script src="assets/js/nealesdest02.js"></script>
	</body>
</html>


