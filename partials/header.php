<?php
function curPageURL() {
 $pageURL = '';
 // if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 // $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

$curPageURL = curPageURL(); 
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Capstone Project 2</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/demo.css" rel="stylesheet">

  </head>
   <body>

    <!-- Navigation -->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Always Be Closing Academy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

<!--           <ul>

<li <?php //if($curPageURL == 'catalog.php') {echo 'class="active"';}?>> <a href="catalog.php">Cart</a></li>
<li <?php //if($curPageURL == 'aboutus.php') {echo 'class="active"';}?>> <a href="aboutus.php">About Us</a></li>
<li <?php //if($curPageURL == 'signin.php'){echo 'class="active"';}  ?>> <a href="signin.php">Sign in</a></li>
<li <?php //if($curPageURL == 'register.php'){echo 'class="active"';}?>> <a href="register.php">Register</a></li>
</ul> --> 
           <ul class="navbar-nav ml-auto">
               <?php if($curPageURL == 'localhost:8080/index.php') { ?>
              <li class="nav-item active"> <a class="nav-link" href="index.php">Browse Events</a></li>
                <span class="sr-only">(current)</span>
            </li>

            <?php } else { ?> 
              <li class="nav-item"> <a class="nav-link" href="index.php">Browse  Events</a></li> 
              <?php } ?>                    
          


              <li class="nav-item active"
               <?php if($curPageURL == 'localhost:8080/catalog.php') { ?>
              <li class="nav-item active"> <a class="nav-link" href="catalog.php">Catalog</a></li>
                <span class="sr-only">(current)</span>
            </li>

            <?php } else { ?> 
              <li class="nav-item"> <a class="nav-link" href="catalog.php">Catalog</a></li> 
              <?php } ?>
       
         

            <li class="nav-item active"
               <?php if($curPageURL == 'localhost:8080/aboutus.php') { ?>
              <li class="nav-item active"> <a class="nav-link" href="aboutus.php">About Us</a></li>
                <span class="sr-only">(current)</span>
            </li>

            <?php } else { ?> 
              <li class="nav-item"> <a class="nav-link" href="aboutus.php">About Us</a></li> 
              <?php } ?>

             
            </li>

            <li class="nav-item active"
             <?php if($curPageURL == 'localhost:8080/signin.php') { ?>
              <li class="nav-item active"> <a class="nav-link" href="signin.php">Sign In</a></li>
                <span class="sr-only">(current)</span>
            </li>

            <?php } else { ?> 
              <li class="nav-item"> <a class="nav-link" href="signin.php">Sign In</a></li> 
              <?php } ?>

              <?php if($curPageURL == 'localhost:8080/register.php') { ?>

              <li class="nav-item active"> <a class="nav-link" href="register.php">Register</a>
                <span class="sr-only">(current)</span>
              </li> 
              <?php } else { ?> 
              <li class="nav-item"> <a class="nav-link" href="register.php">Register</a></li> 
              <?php } ?>
              <!-- <a class="nav-link" href="register.php">Register</a> -->

            </li>
          </ul> 
        </div>
      </div>
    </nav>
