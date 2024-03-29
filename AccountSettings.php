<?php
// 
session_start();
include_once 'db.php';
include_once 'header.php';
if(!isset($_SESSION['login'])){
  echo "<script>alert('Please login to continue'); window.location.href ='login.php'</script>";
}
?>

<style>
.navbar-brand{
  margin-top: -22px;
  margin-right: 5px;
}
</style>
<body>
  <?php
  include_once 'navigationBar.php';
  ?>
  <div class="rq-checkout-banner">
    <div class="rq-checkout-banner-mask">
      <div class="container">
        <div class="rq-checkout-banner-text">
          <div class="rq-checkout-banner-text-middle">
            <h1>Account Settings</h1>
          </div>
        </div>
      </div>
    </div>
  </div><!-- / rq-banner-area-->
  <div class="rq-checkout-form">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-6" style ='padding-left:0px'>
          <form method = "POST">
           <h1 class="rq-checkout-form-title">personal information</h1>
           <div class="row">
             <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label for="firstName">FIRST NAME <span>*</span></label>
                <input type="text" name = "firstName" value = "<?= $_SESSION['firstname'] ?>" class="form-control" id="firstName" pattern = "[a-zA-Z]+" required onkeypress="return isLetter(event)">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
             <div class="form-group">
              <label for="lastName">LAST NAME<span>*</span></label>
              <input type="text" name = "lastName" class="form-control" value ="<?= $_SESSION['lastname'] ?>" id="lastName" pattern = "[a-zA-Z]+" required onkeypress="return isLetter(event)">
            </div>
          </div>
        </div><!------/row-------->

        <div class="row">
         <div class="col-md-6 col-sm-6">
          <div class="form-group">
            <label for="email">EMAIL<span>*</span></label>
            <input type="email" name = "email" class="form-control" id="email" value = "<?=$_SESSION['email']?>" required>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="form-group">
            <label for="ContactNumber">CONTACT NUMBER<SPAN>*</SPAN></label>
            <input type="text" name = "contactNumber" pattern = "[0-9]+" class="form-control" value = "<?=$_SESSION['contactNumber']?>" id="contactNumber" required onkeypress="return isNumber(event)" id="contactNumber">
          </div>
        </div>
      </div><!------/row-------->

      <!--country and address-->
      <div class="row">
        <div class="col-md-6 col-sm-6">
        </div>
        <div class="col-md-6 col-sm-6">

        </div><!------/row-------->

        <div class="row">
         <div class="col-md-6 col-sm-6" style="padding-left:-20px">
          <div class="form-group">
            <label for = "address">ADDRESS</label>
            <input type="text" class="form-control" name="address" value ='<?= $_SESSION['address'] ?>'required>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="form-group">
            <label for="country">COUNTRY</label>
            <div class="rq-checkout-form1 rq-checkout-country">
              <select required name="country" class="js-example-placeholder-single form-control rq-checkout-form-select">
                <option>&nbsp;</option>
                <option value="Australia">Australia</option>
                <option value="China">China</option>
                <option value="HongKong">Hong Kong</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Japan">Japan</option>
                <option value="Korea">Korea</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Philippines" selected="selected">Philippines</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Thailand">Thailand</option>
                <option value="UAE">United Arab Emirates</option>
                <option value="UK">United Kingdom</option>
                <option value="USA">United States</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>
        </div>
      </div>         
    </div>
    <button class="btn btn-lg btn-primary" name="submit" type="submit">Update</button>

  </form>
  <?php 
    if(isset($_POST['submit'])){
      $firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
      $lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $contact = mysqli_real_escape_string($conn, $_POST['contactNumber']);
      $address = mysqli_real_escape_string($conn, $_POST['address']);
      $country = mysqli_real_escape_string($conn, $_POST['country']);
      if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM guest_masterfile WHERE guest_email = '{$email}' AND guest_ID != {$_SESSION['guest_ID']}")) != 0){
        echo "<script>alert('Email already exist');window.location.href= 'AccountSettings.php'</script>";
      }
      mysqli_query($conn, "UPDATE guest_masterfile SET guest_firstname = '{$firstname}', guest_lastname ='{$lastname}', guest_email ='{$email}', guest_contactNumber = {$contact}, guest_country = '{$country}', guest_address = '{$address}' WHERE guest_ID = {$_SESSION['guest_ID']}") or die(mysqli_error($conn));
      $_SESSION['firstname'] = $firstname;
      $_SESSION['lastname'] = $lastname;
      $_SESSION['email'] = $email;
      $_SESSION['contactNumber'] = $contact;
      $_SESSION['address'] = $address;
      $_SESSION['country'] = $country;
      echo "<script>alert('Update Success'); window.location.href = 'AccountSettings.php'</script>";
    }
  ?>
  <div class="rq-checkout-form">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-6" style ='padding-left:0px'>
          <form method = "POST" >
            <h1 class="rq-checkout-form-title">Change Password</h1>
            <div class="form-group">
              <div class ='col-md-6' style ='padding-left:0px'>
                <label for="Password">New password</label>
                <input type="password" name = "oldpassword" class="form-control" style ='margin-bottom:20px' id="password" required>
              </div>
              <div class ='col-md-6'>
                <label for="Password">Confirm new Password</label>
                <input type="password" name = "newPassword" class="form-control" style ='margin-bottom:20px'  id="password" required>
              </div>  

            </div>
                <button class="btn btn-lg btn-primary" name="changepass" type="submit">Change Password</button>
          </form>
          <?php 
            if(isset($_POST['changepass'])){
              $newpassword = mysqli_real_escape_string($conn, $_POST['oldpassword']);
              $confirmpassword = mysqli_real_escape_string($conn, $_POST['newPassword']);
              if($newpassword != $confirmpassword){
                echo "<script>alert('Password does not match')</script>";
              }
              else{
                $hashedPwd = password_hash($confirmpassword, PASSWORD_DEFAULT);
                  mysqli_query($conn, "UPDATE guest_masterfile SET guest_password ='{$hashedPwd}' WHERE guest_ID = {$_SESSION['guest_ID']}");
                  echo "<script>alert('Success. Password has been changed')</script>";
              }
            }
            $_POST = array();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
            <!-- <a class="rq-btn-primary" href="#" role="button"></a> -->

            <!-- <a class="rq-btn-primary" href="#" role="button"></a> -->

          </div>
        </div>
      </div>
    </div>
    </<!-- / rq-checkout-form-->

    <!-- VALIDATION - Numbers only (cellphone number) -->
    <!-- Nasa onkeypress event ng respective input type. -->
    <script type="text/javascript">
      function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          return false;
        }
        return true;
      }
    </script>

    <!-- VALIDATION - Letters and white spaces only (First Name, Last Name) -->
    <!-- Nasa onkeypress event ng respective input type. -->
    <script type="text/javascript">
      function isLetter(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (!(charCode >= 65 && charCode <= 122) && (charCode != 32 && charCode != 0)) {
          return false;
        }
        return true;
      }
    </script>

    <!-- Footer -->
    <footer class="footer">
      <div class="rq-footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-12">
              <div class="footer-logo">
                <img  src="homelogo.png" style="width: 100px;height: 
                100px" class="img-responsive" alt="Responsive image" />
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <h5>address</h5>
              <address>
                <ul>
                  <li class="rq-hotel-address"><i class="fa fa-map-marker"></i>Along Ilorin Express Way, <br> <span> Aroje area, Ogbomoso </span> </li>
                  <li class="rq-phone"><i class="fa fa-phone"></i>(234) 810890 9729</li>
                  <li class="rq-email"><i class="fa fa-envelope-o"></i>info@lautechhotel.com</li>
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
              <input type="email" class="form-control" id="rq-news-letter" placeholder="Email">
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
          <p>&copy;Copyright  2019. All right researved</p>
        </div>
      </div>
    </div>
  </footer>
</div><!-- main-wrapper -->
<!-- Latest jQuery plugin-->
<script src="js/main.js"></script>
<!-- Latest compiled and minified JavaScript for bootstrap-->
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<!-- <script src="js/bootstrap-datepicker.js"></script> -->
<script src="js/icheck.min.js"></script>
<script src="js/jquery.raty.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.datetimepicker.full.min.js"></script>
<script src="js/scripts.js"></script>


</body>
</html>