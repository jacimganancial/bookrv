<?php
session_start();
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
// echo $request_uri[0] . "\n";
$uri = explode("/", $request_uri[0]);

// include './database/config.php';

error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_WARNING);

//PAGE VIEW CONTROLLERS
switch ($uri[1])
{
    //Home page
    case '':
	    require './views/home.php';
   	    break;
   	case 'home':
   	    require './views/home.php';
   	    break;
   	//About page
   	case 'about':
   	    require './views/about.php';
   	    break;
    //Books page
    case 'books':
   	    require './views/books.php';
   	    break;
    //Sign in page
    case 'signin':
        require './views/signin.php';
        break;
    //Sign up page
    case 'signup':
        require './views/signup.php';
        break;
    //Sign up page
        case 'upload-students':
            require './views/upload-students.php';
            break;
    //Sign up page
        case 'user-index':
            require './views/user-index.php';
            break;
    //Sign up page
        case 'user-home':
            require './views/user-home.php';
            break;

    //Sign up page
        case 'user-about':
            require './views/user-about.php';
            break;

    //Sign up page
        case 'user-books':
            require './views/user-books.php';
            break;

    //Sign up page
        case 'user-cart':
            require './views/user-cart.php';
            break;

	//Error
    default:
        header('HTTP/1.0 404 Not Found');
        require './views/404.php';
        break;
}





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookrv";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS bookrv";

if ($conn->query($sql) === FALSE){
return true;
}

?>
