<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<?php require_once 'partials/db_con.php'; ?>    

    <!-- <title>Register</title> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- css must be at the bottom (latest to work) -->
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>

</nav>

	<div class="container">
		<div class="row">
			<div class="col-lg-1"></div>
      <div class="col-lg-5">

      <form class="form-horizontal">
          <legend>Register</legend>

          <div class="form-group">
              <label class="col-lg-4" for="fullname">Full Name</label>
              <input id="fullname" name="fullname" placeholder="Full Name" class="form-control" type="text">
          </div>    

          <div class="form-group">
              <label class="col-lg-4" for="fullname">Company</label>
              <input id="company" name="fullname" placeholder="Company" class="form-control" type="text">
          </div>    

          <div class="form-group">    
              <label class="col-lg-4" for="email">Email</label>
              <input id="email" name="email" placeholder="Email" class="form-control" type="text">
          </div>

          <div class="form-group">
              <label class="col-lg-4" for="fullname">Password</label>
              <input id="password" name="fullname" placeholder="Password" class="form-control" type="password">
          </div>    

          <div class="form-group">
              <label class="col-lg-4" for="fullname">Confirm Password</label>
              <input id="cpass" name="fullname" placeholder="Password" class="form-control" type="password">
          </div>    

          <div class="form-group">
            <div class="col-lg-4">
              <button id="submit" name="submit" class="btn btn-outline-primary">Submit</button>
            </div>
          </div>

			</div>
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.330281629636!2d120.9777773148387!3d14.465714389888479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cde7639a1b43%3A0xa8ce2b0db158aa26!2s18+Calla+Lily%2C+Las+Pinas%2C+Manila%2C+Metro+Manila!5e0!3m2!1sen!2sph!4v1537353892744" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
      


</body>


<?php require_once 'partials/footer.php'; ?>