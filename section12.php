<style type="text/css">

section#specials {
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

section#specials {
  /*background-image: url(assets/img/grey.jpg);*/
  background-attachment: fixed;
}
section#specials .section-heading h3 {
  color: #555555;
}
section#specials .section-heading h3 span {
  color: #25a7b4;
}
section#specials .section-heading .divider {
  background: #25a7b4;
}
section#specials .section-heading p {
  color: #555555;
}
section#specials .pack {
  background: white;
  text-align: center;
  border: 7px solid white;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  -webkit-transition: all 0.25s ease-in-out;
  -o-transition: all 0.25s ease-in-out;
  -moz-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
  margin: 35px 0;
}
section#specials .pack .heading {
  background: #25a7b4;
  color: white;
  -webkit-border-radius: 3px 3px 0 0;
  -moz-border-radius: 3px 3px 0 0;
  -ms-border-radius: 3px 3px 0 0;
  -o-border-radius: 3px 3px 0 0;
  border-radius: 3px 3px 0 0;
  -webkit-transition: all 0.25s ease-in-out;
  -o-transition: all 0.25s ease-in-out;
  -moz-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
  padding: 20px 15px;
}
section#specials .pack .heading h3 {
  text-transform: uppercase;
  font-weight: bold;
}
section#specials .pack .heading h5 {
  text-transform: lowercase;
}
section#specials .pack .details {
  background: none;
  -webkit-transition: all 0.25s ease-in-out;
  -o-transition: all 0.25s ease-in-out;
  -moz-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
  -webkit-border-radius: 0 0 3px 3px;
  -moz-border-radius: 0 0 3px 3px;
  -ms-border-radius: 0 0 3px 3px;
  -o-border-radius: 0 0 3px 3px;
  border-radius: 0 0 3px 3px;
  padding-bottom: 20px;
}
section#specials .pack .details ul {
  list-style: none;
  padding: 20px 20px 0 20px;
}
section#specials .pack .details ul li {
  padding: 10px 0;
  border-top: 1px solid #eeeeee;
  color: #999999;
}
section#specials .pack .details ul li:first-child {
  border: none;
}
section#specials .pack .details .btn-sign-up {
  background: white;
  color: #25a7b4;
  width: 85%;
  margin: 0 auto;
  border-width: 1px;
  opacity: 0;
}
section#specials .pack:hover {
  border-width: 1px;
  -webkit-transform: translatey(-30px);
  -moz-transform: translatey(-30px);
  -ms-transform: translatey(-30px);
  transform: translatey(-30px);
}
section#specials .pack:hover .heading {
  background: white;
  color: #25a7b4;
}
section#specials .pack:hover .details {
  background: #25a7b4;
  color: white;
}
section#specials .pack:hover .details ul li {
  border-color: #29bbc9;
  color: white;
}
section#specials .pack:hover .details .btn-sign-up {
  background: #25a7b4;
  color: white;
  opacity: 1;
  -webkit-transform: translatey(45px);
  -moz-transform: translatey(45px);
  -ms-transform: translatey(45px);
  -o-transform: translatey(45px);
  transform: translatey(45px);
}
</style>


            <section id="specials">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-push-2 clearfix">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h3><?=$firmName?><span> member packed</span></h3>
                                <span class="divider"></span>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="pack scrollpoint sp-effect6">
                                <div class="heading">
                                    <h3>Airport</h3>
                                    <h1>40<sup>&euro;</sup></h1>
                                    <h5>per trip</h5>
                                </div>
                                <div class="details">
                                    <ul>
                                        <li>1 Airport</li>
                                        <li>1 Trip</li>
                                        <li>1 Named Traveller</li>
                                        <li>2 Bags Storage</li>
                                        <li>Live Arrival Tracking</li>
                                    </ul>
                                    <a href="#" class="btn btn-sign-up btn-block">Buy now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pack scrollpoint sp-effect6">
                                <div class="heading">
                                    <h3>Sightseeing</h3>
                                    <h1>55<sup>&euro;</sup></h1>
                                    <h5>hour</h5>
                                </div>
                                <div class="details">
                                    <ul>
                                        <li>1 Trip</li>
                                        <li>1 Named Traveller</li>
                                        <li>Up to 2 guests</li>
                                        <li>2 Bags Storage</li>
                                        <li>Feedback System</li>
                                    </ul>
                                    <a href="#" class="btn btn-sign-up btn-block">Buy now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pack scrollpoint sp-effect6">
                                <div class="heading">
                                    <h3>Commuter</h3>
                                    <h1>250<sup>&euro;</sup></h1>
                                    <h5>monthly</h5>
                                </div>
                                <div class="details">
                                    <ul>
                                        <li>4 Trips per day</li>
                                        <li>1 Named Traveller</li>
                                        <li>Up to 2 Guests</li>
                                        <li>2 Bags Storage</li>
                                    </ul>
                                    <a href="#" class="btn btn-sign-up btn-block">Buy now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pack scrollpoint sp-effect6">
                                <div class="heading">
                                    <h3>Regular</h3>
                                    <h1>300<sup>&euro;</sup></h1>
                                    <h5>Daily</h5>
                                </div>
                                <div class="details">
                                    <ul>
                                        <li>All Day Use</li>
                                        <li>1 Named Traveller</li>
                                        <li>Up to 3 Guests</li>
                                        <li>5 Bags Storage</li>
                                    </ul>
                                    <a href="#" class="btn btn-sign-up btn-block">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

