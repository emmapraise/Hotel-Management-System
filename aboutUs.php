<!-- <?php
  include_once 'db.php';
  include_once 'header.php';
  session_start();
?> -->
<style>
.navbar-brand{
  margin-top: -22px;
  margin-right: 5px;
}
header .rq-header-main-menu .container-fluid .rq-menu-wrapper ul li.active:before,
header .rq-header-main-menu .container-fluid .rq-menu-wrapper ul li:hover:before {
  content: '';
  width: 100%;
  height: 3px;
  display: block;
  overflow: hidden;
  position: absolute;
  background-color: #ed3434;
  top: 0px;
  left: 0px;
}

</style>
    <header>
    <!-- Navigation Menu start-->
    <nav class="navbar rq-header-main-menu navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Navbar Toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" style = "margin-right: 20px;">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-brand" href="HomepageFinal.php"><img class="logo" src="homelogo.png" alt="Lautech"  style="margin-top: 10px; margin-left: 30px;"></a>
        </div>
        <!-- Navbar Toggle End -->

        <!-- navbar-collapse start-->
        <div id="nav-menu" class="navbar-collapse rq-menu-wrapper collapse navbar-right" role="navigation">
          <ul class="nav navbar-nav rq-menus">
              <li class="active">
                <a href="index.php">Home</a>
                <ul class="rq-sub-menu">
                </ul>
              </li>
            <!--   <li>
                <a href="Rooms.php">Room</a>
                <ul class="rq-sub-menu">
                    <li>
                        <a href="Rooms.php">Twin Queen Room</a>
                    </li>
                    <li>
                        <a href ="Rooms.php">Queen Room </a>
                    <li>
                        <a href="Rooms.php">Family Room</a>
                    </li>
                    <li>
                        <a href="Rooms.php">Quad Room</a>
                    </li>
                    <li>
                        <a href="Rooms.php">Female/Male Room</a>
                    </li>
                     <li>
                        <a href="Rooms.php">Dormitory</a>
                    </li>
                </ul> -->
              </li>
              <li>
                <a href="aboutUs.php">About</a>
              </li>
              <li>
                <a href="ContactUs.php">Contact</a>
              </li>
             <!--  <li>
                <a href="Confirm-Account.php">Reservations</a>
              </li> -->
             <li>
              <?php
                if (isset($_SESSION['Login'])) { ?>
                      <a href="Step1.php">Reservations</a>
               <?php } else { ?>
                      <a href="Confirm-Account.php">Reservation</a>
               <?php } ?>
              </li>
              <?php if(isset($_SESSION['login'])){  ?>
                            <li class="active dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded = "false">
                                    MY ACCOUNT<span class="caret"></span>
                                </a>
                                <ul class="rq-sub-menu">
                                  <li><a href="GuestDashboard.php">MY RESERVATIONS</a></li> 
                                  <li><a href="Logout.php">LOGOUT</a></li>
                                </ul>
                            </li>
                            <?php } else { ?> 
                            <li><a href="login.php">LOGIN</a></li>
                            <?php } ?> 
          </ul>
        </div>
        <!-- navbar-collapse end-->

        <!--<div class="rq-extra-btns-wrapper">
            <button id="rq-side-menu-btn" class="cd-btn btn rq-sidemenu-btn"></button>
        </div>

      </div>
    </nav>
    <!-- Navigation Menu end-->
  </header>
  <div class="rq-checkout-banner">
      <div class="rq-checkout-banner-mask">
        <div class="container">
          <div class="rq-checkout-banner-text">
            <div class="rq-checkout-banner-text-middle">
              <h1>about us</h1>
            </div>
          </div>
       </div>
      </div>  
    </div><!-- / rq-banner-area-->
    <div class="rq-about-us">
      <div class="container ">
        <div class="rq-hotel-text text-center">
         <h1>we are Lautech hotel</h1>
         <div class="rq-palace-logo"><img src="img/palace_logo_2.png" alt="Palace"></div>
         <p>
           LAUTECH Hotel is a new, clean, customer-friendly, very accessible place to stay in Oyo State Ogbomoso, Nigeria.  It has 19 rooms suited to your needs with all the basic amenities.

           It’s located at the Aroje Area Ilorin Express way.
         </p>
       </div>
       <section id="our-team">
          <h2 class="text-center">Our Hotel</h2>
          <div class="row">
            <div class="rq-team-member col-md-4 col-sm-4 col-xs-12">
              <div class="thumbnail view second-effect">
                <div class="rq-image-wrapper">
                    <picture>
                        <source media="(min-width: 768px)" srcset=lautechHotel.jpg>
                        <img alt="Image" src="lautechHotel.jpg" srcset=lautechHotel.jpg>
                    </picture>
                     <ul class="mask">
                         <li class="rq-facebook">
                            <a href="#" class="info"><img src="img/facebook.png" alt="facebook" /></a>   
                         </li>

                         <li class="rq-twitter">
                            <a href="#" class="info"><img src="img/twitter.png" alt="twitter" /></a>   
                         </li>
                          
                          <li class="rq-linkedinf">
                              <a href="#" class="info"><img src="img/linkin.png" alt="linkin" /></a>
                          </li>
                    </ul>
                </div>
                <div class="caption">
                  <h3><a href="#">Lautech Hotel & Suites</a></h3>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="rq-team-member col-md-4 col-sm-4 col-xs-12">
              <div class="thumbnail view second-effect">
                <div class="rq-image-wrapper">
                    <picture>
                        <source media="(min-width: 768px)" srcset=lautechHotel.jpg>
                        <img alt="Image" src="lautechHotel.jpg" srcset=lautechHotel.jpg>
                    </picture>
                     <ul class="mask">
                         <li class="rq-facebook">
                            <a href="#" class="info"><img src="img/facebook.png" alt="facebook" /></a>   
                         </li>

                         <li class="rq-twitter">
                            <a href="#" class="info"><img src="img/twitter.png" alt="twitter" /></a>   
                         </li>
                          
                          <li class="rq-linkedinf">
                              <a href="#" class="info"><img src="img/linkin.png" alt="linkin" /></a>
                          </li>
                    </ul>
                </div>
                <div class="caption">
                  <h3><a href="#">Lautech Hotels</a></h3>
                  <p></p>
                </div>
               
              </div>
            </div>

            <div class="rq-team-member col-md-4 col-sm-4 col-xs-12">
              <div class="thumbnail view second-effect">
                <div class="rq-image-wrapper">
                    <picture>
                        <source media="(min-width: 768px)" srcset=lautechHotel.jpg>
                        <img alt="Image" src="lautechHotel.jpg" srcset=lautechHotel.jpg>
                    </picture>
                     <ul class="mask">
                         <li class="rq-facebook">
                            <a href="#" class="info"><img src="img/facebook.png" alt="facebook" /></a>   
                         </li>

                         <li class="rq-twitter">
                            <a href="#" class="info"><img src="img/twitter.png" alt="twitter" /></a>   
                         </li>
                          
                          <li class="rq-linkedinf">
                              <a href="#" class="info"><img src="img/linkin.png" alt="linkin" /></a>
                          </li>
                    </ul>
                </div>
                <div class="caption">
                  <h3><a href="#">Lautech Hotel</a></h3>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </section><!-- / rq-about-us -->
      </div>
    </div>
  </div>
</div>


 <footer class="footer">
        <div class="rq-footer-top">
          <div class="container">
            <div class="row">
              <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="footer-logo">
                  <img src="homelogo.png" class="img-responsive" alt="Responsive image" />
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <h5>address</h5>
                <address>
                    <ul>
                      <li class="rq-hotel-address"><i class="fa fa-map-marker"></i>Along Ilorin Express way, Aroje area, <br> Ogbomoso Nigeria</li>
                      <li class="rq-phone"><i class="fa fa-phone"></i>(234) 810890 9729</li>
                      <li class="rq-email"><i class="fa fa-envelope-o"></i>   info@lautechhotel.com</li>
                  </ul>
                </address>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <h5>useful link</h5>
                <ul class="rq-footer-links">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Booking System</a></li>
                  <li><a href="#">Hotel Services</a></li>
                  <li><a href="#">Booking Agent</a></li>
                  <li><a href="#">Conntact</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
              <h5>newsletter</h5>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                <div class="rq-common-btn">
                   <button class="btn rq-btn-primary" type="submit">submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="rq-footer-bottom">
            <div class="container">
                <div class="row">
                    <p>&copy;Copyright 2019. All right researved</p>
                </div>
            </div>
        </div>
    </footer>
