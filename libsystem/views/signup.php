<?php include './controller/submit-signup.php';?>

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
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="/"><img src="../css/bookrv.png" width="50px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="books">Books</a>
                </li>
								<div class="line">
                  <svg height="30" width="5">
                    <line x1="5" y1="10" x2="5" y2="50" style="stroke:rgb(141,141,141);stroke-width:1" />
                      </svg>
                </div>

								<li class="nav-item active">
									<a class="nav-link" href="signin">Sign In</a>
								</li>
              </ul>

            </div>
          </div>
          </div>
</div>
          </nav>
        </header>




        <div class="container-fluid" id="signup-form">
					<form method = "POST" action="signup">
               <div class="row featurette text-center">

                 <div class="input-group">

                 <div class="col-md-4"></div>
                 <div class="col-md-4">
                  <h1> Sign Up</h1>
                 </div>
                 <div class="col-md-4"></div>

                 <div class="col-md-4"></div>
                 <div class="col-md-2">
                   <input class="form-control mr-sm-2" type="text" placeholder="First Name" name="fname" required>
                 </div>
                 <div class="col-md-2">
                   <input class="form-control mr-sm-2" type="text" placeholder="Last Name" name="lname">
                 </div>
                 <div class="col-md-4"></div>

                 <div class="col-md-4"></div>
                 <div class="col-md-4">
                    <input class="form-control mr-sm-2" type="number" placeholder= "Student No." name="stud_num" required>
                 </div>
                 <div class="col-md-4"></div>

                 <div class="col-md-4"></div>
                 <div class="col-md-4">
                    <input class="form-control mr-sm-2" type="email" placeholder= "Email" name="email" required>
                 </div>
                 <div class="col-md-4"></div>

                 <div class="col-md-4"></div>
                 <div class="col-md-4">
                    <input class="form-control mr-sm-2" type="password" placeholder= "Password" name="password" required>
                 </div>
                 <div class="col-md-4"></div>

                 <div class="col-md-5"></div>


                 <div class="col-md-2">

                  <button id="register-button" class="btn btn-primary btn-block" type="submit" name="register_btn" >Register</button>
                 </div>

                 <div class="col-md-5"></div></form>
        		</div>

             </div>

						 <div class="row featurette text-center">

							 <div class="col-md-5"></div>

  						 <div class="col-md-2">

  						 <a id="btn-link" href="signin">  <button class="btn btn-outline-primary btn-block">Back to Login</button></a>
  						 </div>

  						 <div class="col-md-5"></div>
						 </div>

					 </div>


					 <footer>


			              <div class="row featurette text-center" id="footer">




			                <div class="col-md-12" id="footer-content">

			                  <p class="font-weight-light">BookRV &copy 2018 Tarlac State University. All rights reserved.</p>
			                </div>



			            </div>

			     </footer>

          <script src="../js/jquery.min.js"></script>
          <script src="../js/bootstrap.js"></script>



				</body>
				</html>
