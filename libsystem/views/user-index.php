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

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../img/logo.png">

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
                <li class="nav-item active">
                  <a class="nav-link" href="user-home">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="user-about">About</a>
                </li>
                <li class="nav-item">
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
          </nav>
        </header>


				        <div class="container-fluid" id="cover">
				          <div class="hero-text">

				            <div class="row">
				              <div class="col-md-2"></div>
				              <div class="col-md-8" style="background-image:url('img/ribbon.png')"><h1 style="font-size:60px;">Why BookRV?</h1><img src="css/bookrv.png" width="30%"></div>
				              <div class="col-md-2"></div>
				            </div>

				            <div class="container">
				              <p style="font-size:24px; color:#11311b;">BookRV lets you reserve your library books online.</p>
				            </div>

				          <a href="user-books"> <button class="btn btn-lg btn-success">Reserve now</button> </a>
				          </div>
				        </div>

				        <div class="container-fluid">
				          <div class="row featurette text-center" id="mission-vision">

				            <div class="col-md-2"></div>

				            <div class="col-md-8" id="overview">
				              <img src="../img/lib3.jpg" id="overview-pic" class="img-fluid" alt="Responsive image">
				              <h1 class="featurette-heading">Overview</h1>
				              <p class="lead">The TSU Libraries are learning centers whereby students, faculty, and other library clients do their intellectual activity. Each Library offers services and collections specific to the academic needs of the College or Department.
				              </p>
				            </div>

				              <div class="col-md-2"></div>

				          </div>
				        </div>

				        <div class="container-fluid">
				          <div class="row featurette text-center" id="mission-vision">
				            <div class="col-md-1"></div>

				            <div class="col-lg-10">
				                <img src="../img/lib3.jpg" id="overview-pic" class="img-fluid" alt="Responsive image">
				            </div>
				            <div class="col-md-1"></div>

				            <div class="col-md-1"></div>

				            <div class="col-md-5" id="mission">
				              <h1 class="featurette-heading">Mission</h1>
				              <p class="lead">The Library Management & Service Office, being an active force in informational research, teaching and the like, shall always support the expanding instructional programs of the University. It shall provide library materials that are relevant to the needs of the studentry, faculty and staff.
				            </p>
				            </div>

				            <div class="col-md-5" id="vision">
				              <h1 class="featurette-heading">Vision</h1>
				              <p class="lead">The Library Management & Service Office is a facility of the University which provides state–of–the–art learning and resource materials to the clientele.
				              </p>
				            </div>

				            <div class="col-md-1"></div>

				        </div>
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
