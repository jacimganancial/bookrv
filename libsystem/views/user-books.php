<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
 session_start();
if (isset($_SESSION['valid']) && $_SESSION['valid'] == true) {

} else {
  header ('location: signin');
}

include './controller/submit-signin.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Bookrv: Reserve books online</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/logo.png">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-sm-12">
        <header>
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
            <a class="navbar-brand" href="user-home"><img src="../css/bookrv.png" width="50px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="user-home">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="user-about">About</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="user-books">Books</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="user-cart">Cart</a>
                </li>
                <li class="nav-item">
                  <p class="display-name">Welcome, <?php echo $displayname;?>!</p>
                </li>

              </ul>
              <a href="signout">  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Log out</button> </a>

              </div>
            </div>
          </div>
          </div>
</div>
          </nav>
        </header>



          				<div class="container-fluid" id="book-table">
                    <table class="table">
                      <div class="container" id="t-header">
                        <thead class="thead">
                          <tr>

                            <th scope="col">No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Available</th>
                            <th scope="col">Description</th>


                          </tr>
                        </thead>
                      </div>





              <?php

              include './controller/display-books.php';

               ?>

    </div>
              <footer>

                       <div class="row featurette text-center">
                         <div class="col-md-12" id="footer-content">

                           <p class="font-weight-light">BookRV &copy 2018 Tarlac State University. All rights reserved.</p>
                         </div>


                     </div>

              </footer>





  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>

</body>

</html>
