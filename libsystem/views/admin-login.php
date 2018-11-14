<?php
  include './controller/admin-signin.php';

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Bookrv: Reserve books online</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../img/logo.png">
</head>

<body>


<div class="container-fluid" id="login-form">
<form method = "POST" action="admin-login">
       <div class="row featurette text-center">
         <div class="input-group">

         <div class="col-md-5"></div>

         <div class="col-md-2">

          <h1> Sign In</h1>
         </div>



         <div class="col-md-5"></div>


         <div class="col-md-5"></div>

         <div class="col-md-2">

            <input class="form-control mr-sm-2" type="text" placeholder= "Account Number" name="acc_num">
         </div>

         <div class="col-md-5"></div>

         <div class="col-md-5"></div>

         <div class="col-md-2">

           <input class="form-control mr-sm-2" type="password" placeholder="Password" name="password">
         </div>

         <div class="col-md-5"></div>

         <div class="col-md-5"></div>

         <div class="col-md-2">


        <a id="forgot-password" href="#"></a> </p>
         </div>

         <div class="col-md-5"></div>

         <div class="col-md-5"></div>


         <div class="col-md-2">

          <button id="login-button" class="btn btn-primary btn-block" type="submit" name="signin_btn">Login</button>
         </div>

         <div class="col-md-5"></div>	</form>

       </div>
     </div>
</div>
<footer>
        <div class="row" id="footer">
          <div class="col-md-12" id="footer-content">
            <p class="font-weight-light">BookRV &copy 2018 Tarlac State University. All rights reserved.</p>
          </div>
      </div>
</footer>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>
</body>
</html>
