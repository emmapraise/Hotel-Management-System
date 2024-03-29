<?php
  include_once 'dbConnect.php';
  session_start();

  if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $adminType = mysqli_real_escape_string($conn, $_POST['adminType']);
    $login_verify = "SELECT * FROM adminuser_masterfile WHERE email='$email'";
        $result = mysqli_query($conn,$login_verify) or die (mysqli_error($conn));
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
          // kapag walang email
          echo "<script>alert('Incorrect Username or Password');location.href='login.php';</script>";
          exit();
        } else {
          if ($row = mysqli_fetch_assoc($result)) {
            if (!password_verify($password, $row['password'])) {
            //if($row['password'] !== $password){
              // kapag mali password
              // header("Location: login.php?login=Incorrect+username+or+password");
              echo "<script>alert('Incorrect Username or Password');location.href='login.php';</script>";
              exit();
            }
            else {
              $_SESSION['login'] = true;
              $_SESSION['user_id'] = $row['user_id'];
              $_SESSION['firstName'] = $row['User_firstname'];
              $_SESSION['lastName'] = $row['User_lastname'];
              $_SESSION['email'] = $row['email'];
              $_SESSION['adminType'] = $row['adminType'];
              $_SESSION['password'] = $row['password'];
              $_SESSION['confirmPassword'] = $row['confirmPassword'];
              header("Location: index.php");
            }
          }
        } 
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>HomeTown Hotel - Admin Module</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method = "POST" action = "login.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input required class="form-control" id="exampleInputEmail1" name = "email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input required class="form-control" id="exampleInputPassword1" name = "password" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputAdminType">Type</label>
            <select required id="cmbMake" name="adminType">
               <option value="Admin" selected="selected">Admin</option>
               <option value="FrontDesk">Front Desk</option>
            </select>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button name = "submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
