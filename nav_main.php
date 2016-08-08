        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/logo.png" alt="Neales" class="img-responsive logo n1">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <?php //echo Navbar::GenerateMenu($topMenu); ?>

                    <ul class="nav navbar-nav navbar-right">

                        <li class="active"><a href="#about">What<span class="sr-only">*</span></a></li>

                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                          role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <?php echo WithinNavbar::GenerateMenu($aboutMenu); ?>
                          </ul>
                        </li>                        
                          
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                          role="button" aria-haspopup="true" aria-expanded="false">Vehicles<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <?php echo WithinNavbar::GenerateMenu($servicesMenu); ?>
                          </ul>
                        </li>

                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                          role="button" aria-haspopup="true" aria-expanded="false">Modes <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <?php echo WithinNavbar::GenerateMenu($modesMenu); ?>
                            <li role="separator" class="divider"></li>
                            <li><a href="#account">Create Account</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#offers">Offers</a></li>
                          </ul>
                        </li>
                        <?php echo WithinNavbar::GenerateMenu($endsMenu); ?>
                      </ul>

                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>