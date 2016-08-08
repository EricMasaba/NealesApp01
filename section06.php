        <section id="book">
            
            <div class="container-fluid">
                <div class="section-heading inverse scrollpoint sp-effect3">
                    <h1>Book a Taxi Now</h1>
                    <div class="divider"></div>
                    <p>Create an account to be able to use the booking form</p>
                </div>

                 <div class="container nftw">

                    <div id="logo1"></div>

                      <div class="input-group margin-bottom-sm filter-parent" id="search">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input placeholder="Search" id="filter-by" class="form-control input-md" tabindex="1">
                        <span class="input-group-addon"><a href="#" id="filter-clear" class="fa fa-times"></a></span>
                      </div>

                      <div class="row ls-form">   <!-- Form Name -->

                     <div id="bookingForm" class="form-horizontal">
                        <div class="row-height">
                            <?php include "controlBar.php"; ?>      <!-- Control Bar     -->
                        </div>

                        <div class="row nft">
                          <div tclass="row-height">

                            <div class="col-xs-7 col-sm-7 col-sm-height">
                              <div class="inside inside-full-height">
                                <div tclass="content">
                                  <label class="control-label" for="pickup">Date</label>
                                  <div class="input-group margin-bottom-sm">
                                    <span class="input-group-addon"><i class="fa fa-1x fa-calendar fa-fw"></i></span>
                                    <input id="bookDate" class="form-control" type="text" placeholder="Date">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-xs-5 col-sm-5 col-sm-height col-sm-top">
                              <div class="inside inside-full-height">
                                <div class="bontent">
                                  <label class="control-label" for="pickup">Time</label>
                                  <div class="input-group margin-bottom-sm">
                                    <span class="input-group-addon"><i class="fa fa-1x fa-clock-o fa-fw"></i></span>
                                    <input id="bookTime" class="form-control" type="text" placeholder="Time">
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div><!-- row height -->
                        </div><!--  row nft -->

                      <!-- Pickup -->
                      <div id="multiple-origins" class="nft">
                            <label class="control-label" for="pickup">Pickup</label>
                            <div class="input-group margin-bottom-sm">
                            <span id="triggerPickup" class="input-group-addon"><i class="fa fa-3x fa-street-view fa-fw"></i></span>
                            <input id="many-origins" class="form-control typeahead" data-required="Pick-Up Location" type="text" placeholder="Pickup">
                            <span class="input-group-addon"><a href="#" id="filter-clear" class="fa fa-3x fa-times"></a></span>
                            </div>
                            <div id="lookup_field_1" class="lookupField"></div>
                      </div>

                      <!-- Destination -->
                      <div id="multiple-destinations" class="nft">
                            <label class="control-label" for="Destination">Drop Off</label>
                            <div class="input-group margin-bottom-sm">
                            <span id="triggerDropoff" class="input-group-addon"><i class="fa fa-3x fa-anchor fa-fw"></i></span>
                            <input id="many-destinations" class="form-control typeahead" data-required="DropOff Location" type="text" placeholder="Drop Off">
                            <span class="input-group-addon"><a href="#" id="filter-clear" class="fa fa-3x fa-times"></a></span>
                            </div>
                            <div id="lookup_field_2" class="lookupField"></div>
                      </div>

                    <!-- # Passengers -->
                      <div class="nft">
                        <label class="control-label" for="Passengers">Passengers</label>
                          <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-3x fa-arrow-down fa-3x fa-lg"></i><i id="adult-add" class="fa fa-3x fa-3x fa-user-plus fa-lg"></i></span>
                            <!-- <input class="form-control" id="Passengers" placeholder="1-8" type="text" required=""> -->
                            <select class="form-control" id="passengers">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            </select>
                          </div>
                            <div class="checkbox">
                                <input id="box1" type="checkbox" />
                                <label for="box1"> Mobility</label>
                                <input id="box2" type="checkbox" />
                                <label for="box2"> Shared</label>
                            </div>
                     </div>    <!-- </div> -->

                    <!-- # Bags & Kids -->
                        <div class="row nft">
                        <div class="row-height">
                          <div class="col-xs-6 col-sm-6 fcol-sm-height">
                            <div class="inside inside-full-height">
                              <div class="content">

                                <label class="control-label">Luggage</label>
                                <div class="input-group margin-bottom-sm col-lg-4">
                                  <span class="input-group-addon"><i class="fa fa-3x fa-suitcase fa-lg"></i></span>
                                  <select class="form-control" id="baggage">
                                  <option selected value="-11111">#</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  </select>
                                </div>

                              </div>
                            </div>
                          </div>

                          <div class="col-xs-5 col-sm-5 fcol-sm-height fcol-sm-top">
                            <div class="inside inside-full-height">
                              <div class="content">

                                <label class="control-label" for="Children">Children</label>
                                  <div class="input-group margin-bottom-sm col-lg-4">
                                    <span class="input-group-addon"><i class="fa fa-3x fa-child fa-lg"></i></span>
                                    <select class="form-control" id="children">
                                    <option selected value="-11111">#</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    </select>
                                  </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>

                  <!-- Plenty More -->
                        <div class="nft_map">
                            <div id="map-canvas"></div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <?php include "01modal.php"; ?>


            </div>
        </section>