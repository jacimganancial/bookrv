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

                <a href="signin">  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Log out</button> </a>

              </ul>
            </div>
          </div>
          </div>
</div>
          </nav>
        </header>

        				<div class="container-fluid" id="book-table">
                  <table class="table">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Available</th>
        			<th scope="col">Description</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Introduction to Programming</td>
        			<td>Introduction to Programming</td>
        			<td>Introduction to Programming</td>
        			<td>Introduction to Programming</td>


            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
        			<td>Introduction to Programming</td>

            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
        			<td>Introduction to Programming</td>
            </tr>
        		<tr>
        			<th scope="row">3</th>
        			<td>Larry</td>
        			<td>the Bird</td>
        			<td>@twitter</td>
        			<td>Introduction to Programming</td>
        		</tr>
        		<tr>
        			<th scope="row">3</th>
        			<td>Larry</td>
        			<td>the Bird</td>
        			<td>@twitter</td>
        			<td>Introduction to Programming</td>
        		</tr>

        		</tr>
          </tbody>
        </table>




              </div>
              <footer>
                <div class="container-fluid">

                       <div class="row featurette text-center" id="footer">


                         <div class="col-md-1"></div>

                         <div class="col-md-10" id="footer-content">
                           <hr id="footer-line">
                           <p class="font-weight-light">BookRV &copy 2018 Tarlac State University. All rights reserved.</p>
                         </div>

                         <div class="col-md-1"></div>

                     </div>
               </div>
              </footer>






  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>

</body>

</html>
