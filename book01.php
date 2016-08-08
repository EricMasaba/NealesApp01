<?php 
  include "__config.php";
  $root="__ROOT__"; 
?>

<html>
  <head>
    <title>Neales (01) | Book Trips | Flex</title>
    <!-- HEADER REMAINDER -->
    <?php include "bookingHeaderICO.php"; ?>

  </head>
  <body>

      <!-- JS -->
      <?php include "bookingAssetsJS.php"; ?>

      <!-- CSS -->
      <?php include "bookingAssetsCSS.php"; ?>

      <div class="desktop maincnt " style="width:320px">
        <div class="maincntinner">

        <div class="header">
          <img alt="header" scale="no" src="assets/img/header.png">
          <a class="button button-home" href="abrar.php">
            <img alt="home" src="assets/img/home.png?width=320&amp;format=png" width="320">
          </a>
          <div style="display: none;">
            <a href="qqefwssq.html" id="rbfstvszsvdrt" rel="file">yyawrsarascvcwbtfuyyawr
            </a>
          </div>
        </div>

          <!-- Booking Header -->
          <?php // include "bookingheader.php"; ?>

          <div class="icontent">
            <form action="<?=$root?>booking.php" method="post">
              <div class="ipanel formpanel">
                <div class="iitems">
                  <div class="ipanel form-panel-header">
                    <div class="iitems">
                      Pickup &amp; DropOff?
                    </div>
                  </div>

                  <div class="ipanel form-panel-body">
                    <div class="iitems">

                      <div class="ipanel">
                        <form>
                            <div class="typeahead__container">
                                <div class="typeahead__field">

                                    <span class="typeahead__query">
                                        <input class="js-typeahead-input"
                                               name="oq"
                                               type="search"
                                               autofocus
                                               autocomplete="off">
                                    </span>

                                    <span class="typeahead__button">
                                        <button type="submit">
                                            <span class="typeahead__search-icon"></span>
                                        </button>
                                    </span>

                                </div>

                            </div>
                            <div class="js-result-container"></div>
                        </form>
                      </div>


                      <div class="iitem formfield ">
                        <div class="iboxh">
                          <span class="ilabel">Begin:</span>
                            <div class="typeahead__container">
                                <div class="typeahead__field">
                                  <span class="typeahead__query">
                                      <input class="js-typeahead-input"
                                             name="oq"
                                             type="search"
                                             autofocus
                                             autocomplete="off">
                                  </span>
                                  <span class="typeahead__button">
                                      <button type="submit">
                                          <span class="typeahead__search-icon"></span>
                                      </button>
                                  </span>  
                              </div>
                            </div>                              
                        </div>
                      </div>

                      <div class="iitem formfield ">
                        <div class="iboxh">
                          <span class="ilabel">
                            Destination:
                          </span>
                          <span class="ivalue">
                            <input class="ibtn text-field input-airport input-return-airport" name="_eventId_selectDestinationAirport" type="submit" value="Select">
                          </span>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="ipanel form-panel-header">
                    <div class="iitems">
                      When
                    </div>
                  </div>
                  <div class="ipanel form-panel-body">
                    <div class="iitems">
                      <div class="iitem formfield ">
                        <div class="iboxh">
                          <span class="ilabel">Departure date:
                          </span>
                          <span class="ivalue">
                            <input class="ibtn text-field input-normal input-date" name="_eventId_showCalendar_departDate" type="submit" value="Mon 25 Apr">
                          </span>
                        </div>
                      </div>
                      <div class="returnDate">
                        <div class="iitem formfield ">
                          <div class="iboxh">
                            <span class="ilabel">
                              Departure time:
                            </span>
                            <span class="ivalue">
                              <input class="ibtn text-field input-normal input-time" name="_eventId_showCalendar_departTime" type="submit" value="10:30">
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ipanel form-panel-header">
                    <div class="iitems">
                      Passengers
                    </div>
                  </div>
                  <div class="ipanel form-panel-body">
                    <div class="iitems">
                      <div class="iitem formfield">
                        <div class="iboxh">
                          <span class="ilabel">
                            Adults:
                            <span class="hint">(16+)
                            </span>
                          </span>
                          <span class="ivalue">
                            <select class=" input-small" name="numAdults">
                              <option selected="true" value="1">
                                1
                              </option>
                              <option value="2">
                                2
                              </option>
                              <option value="3">
                                3
                              </option>
                              <option value="4">
                                4
                              </option>
                              <option value="5">
                                5
                              </option>
                              <option value="6">
                                6
                              </option>
                              <option value="7">
                                7
                              </option>
                              <option value="8">
                                8
                              </option>
                              <option value="9">
                                9
                              </option>
                              <option value="10">
                                10
                              </option>
                            </select>
                          </span>
                        </div>
                      </div>
                      <div class="iboxh">
                        <div class="iitem formfield">
                          <div class="ilabel" style="width: 60%; float: left;">
                            Children &amp; Infants:
                          </div>
                          <div class="ilabel" style="width: 40%; float: left;">
                            <span class="ivalue">
                              <div class="ipanel ibtns">
                                <input class="ibtn button ibtn addChildInfantButton" name="_eventId_selectPassengers" type="submit" value="Add">
                              </div>
                            </span>
                            <div style="float: right; font-size: 28px; margin: 0px 15px 0px 0px">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ipanel form-panel-header">
                    <div class="iitems">
                      Show my results paying with...
                    </div>
                  </div>
                  <div class="ipanel form-panel-body">
                    <div class="iitems">
                      <div class="iswitch-nojs switch-smaller">
                        <a class="ibtn " href="<?=$root?>booking?_eventId=selectPaymentType&amp;paymentType=CREDIT&amp;execution=e1s2035761276">Neales Account
                        </a>
                        <a class="ibtn pressed" href="<?=$root?>booking?_eventId=selectPaymentType&amp;paymentType=DEBIT&amp;execution=e1s2035761276">Cash
                        </a>
                      </div>
                      <input name="paymentType" type="hidden" value="true">
                    </div>
                  </div>
                  <div class="button-group">
                    <hr class="submit-button-separator">
                    </hr>
                  <div class="ipanel ibtns">
                    <input class="ibtn button button-submit" name="_eventId_proceed" type="submit" value="Search">
                  </div>
                </div>
              </div>
              </div>
            </form>
        </div>
      </div>
        <div class="ifooter">
          <a href="<?=$root?>">Home
          </a>
          <div class="copyright">
            &copy; Mamaer, Neales Flex 2016
          </div>
        </div>
    </div>

      <script src="assets/js/nealesdest01.js"></script>

    </body>
  </html>