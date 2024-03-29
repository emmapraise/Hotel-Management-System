<?php
  include_once 'db.php';
  include_once 'header.php';
  session_start();
?>

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
.footer .rq-footer-top h5 {
  font-size: 14px;
  text-transform: uppercase;
  color: #ed3434;
  margin-bottom: 25px;
}
.rq-btn-primary {
  font-family: 'Roboto', sans-serif;
  padding: 0px 30px;
  font-size: 11px;
  line-height: 40px;
  border-radius: 0;
  color: #fff;
  background-color: #ed3434;
  border-color: transparent;
}
</style>
<body>
  <?php
    include_once 'navigationBar.php';
  ?>
  <div id="home2-banner" class="rq-banner-area">
    <div class="rq-banner-area-mask">
      <div class="container">
        <div class="bq-banner-text">
          <div class="bq-banner-text-middle">
            <h1><b>Lautech Hotel </b></h1>
            <div class="rq-checkout-area  ">
              <div class="container">
                <div class="rq-cheakout-content">
              </div><!-- / container-->
            </div><!-- / checkout-area-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- / rq-banner-area-->
  <!-- Room Package -->
  <section class="rq-room-package-section">
    <div class="container">
      <div class="row">
        <h2 class="text-center">WHAT WE OFFER</h2>

        <div class="rq-room-package-wrapper">
          <!-- PACKAGE ITEM -->
          <div class="rq-room-package rq-dbl-width">
            <picture>
                <source media="(min-width: 768px)" srcset=Ewedu-Soup.jpg>
                <img alt="Imag" src="Ewedu-Soup.jpg" srcset=Ewedu-Soup.jpg>
            </picture>
            <a href="#" class="rq-img-overlay-effect">
              <p class="rq-room-name-price">
                <span class="rq-room-title">Abula Special</span>
                <span class="rq-package-price"></span>
              </p>
            </a>
          </div>
          <!-- END -->
          <!-- PACKAGE ITEM -->
          <div class="rq-room-package rq-dbl-height">
            <picture>
                <source media="(min-width: 768px)" srcset=RoomsPackages1.jpg>
                <img alt="Image" src="RoomsPackages1.jpg" srcset=RoomsPackages1.jpg>
            </picture>

            <a href="#" class="rq-img-overlay-effect">
              <p class="rq-room-name-price">
                <span class="rq-room-title">Room package</span>
                <span class="rq-package-price"></span>
              </p>
            </a>
          </div>
          <!-- END -->

          <!-- PACKAGE ITEM -->
          <div class="rq-room-package">
            <picture>
                <source media="(min-width: 768px)" srcset=RoomsPackages2.jpg>
                <img alt="Image" src="RoomsPackages2.jpg" srcset=RoomsPackages2.jpg>
            </picture>

            <a href="#" class="rq-img-overlay-effect">
              <p class="rq-room-name-price">
                <span class="rq-room-title">Food Menu</span>
                <span class="rq-package-price"></span>
              </p>
            </a>
          </div>
          <!-- END -->

          <!-- PACKAGE ITEM -->
          <div class="rq-room-package">
            <picture>
                <source media="(min-width: 768px)" srcset=RoomsPackages.jpg>
                <img alt="Image" src="RoomsPackages.jpg" srcset=RoomsPackages.jpg>
            </picture>

            <a href="#" class="rq-img-overlay-effect">
              <p class="rq-room-name-price">
                <span class="rq-room-title"></span>
                <span class="rq-package-price"></span>
              </p>
            </a>
          </div>
          <!-- END -->
        </div>
      </div>
    </div>      
  </section>
<!-- Room Package End -->
   </div><!------/container -------->
  </div><!-- / rq-content-making-area-->
  <div id="testimonial" class="rq-content-making-area">
    <div class="container ">
      <div class="rq-owl-carousel-content">
         <div class="owl-carousel">
             <div class="rq-content-making-item">
             <div class="rq-content-logo text-center center-block">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
             </div>
              <p class="text-center">Great Personalized service. Clean Rooms. Good location. Great Food. Good value for money. Nice, clean....yet,EASY ON THE POCKET!</p>
              <p class="rq-special text-center">Lautech</p>
           </div>
           <div class="rq-content-making-item">
             <div class="rq-content-logo text-center center-block">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
             </div>
              <p class="text-center">Welcome! BE OUR GUEST! (Be safe)</p>
              <p class="rq-special text-center">Lautech</p>
           </div>
           </div>
      </div>
    </div><!------/container -------->
  </div><!-- / rq-content-making-area-->
<!-- 
  <div id = "map"></div> -->

  <script>
    //Map options
    function initMap(){
      var options ={
        zoom: 17,
        center:{lat:14.5400,lng:121.0130}
      }
      //New Map 
      var map = new google.maps.Map(document.getElementById('map'), options);

      //map marker
      var marker = new google.maps.Marker({
        position:{lat:14.5403, lng:121.0160},
        map:map,
      });

      var infoWindow = new google.maps.InfoWindow({
        content:'<h1> Lautech Ogbomoso </h1>'
        
      });

      marker.addListner('click', function(){
        infoWindow.Open(map, marker); 
      });
      
    }
  </script>
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcFegehYljKJ9MIiehCz4Ua_G1ayBHLbw&callback=initMap">
    </script>


   <!-- Footer -->
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
                      <li class="rq-hotel-address"><i class="fa fa-map-marker"></i>  Along Ilorin Express Way, Aroje area, Ogbomoso 
                      <li class="rq-phone"><i class="fa fa-phone"></i>(234) 810890 9729</li>
                      <li class="rq-email"><i class="fa fa-envelope-o"></i>info@lautechhotel.com</li>
                  </ul>
                </address>
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



  <!-- Latest jQuery plugin-->
  <script src="js/main.js"></script>
  <!-- Latest compiled and minified JavaScript for bootstrap-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/icheck.min.js"></script>
  <script src="js/jquery.raty.js"></script>
  <script src="js/jquery.datetimepicker.full.min.js"></script>
  <script src="js/scripts.js"></script>

</body>
</html>