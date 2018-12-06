<!DOCTYPE html>
<html>
<head>
  <title>Polling</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand font-weight-bold" href="#">Polling</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
            <a class="nav-link" href="#">Registration</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#myModal">Login</a>
      </li>
    </ul>
  </nav>

<?php
	include('searchpage.php');
	?>
  <!-- Card List -->
  <div class="container ml-auto mt-4 text-center">
    <div class="vote-now-button mb-4">
      <button class="btn btn-outline-secondary w-75 font-weight-bold">Vote Now</button>
    </div>
    <div class="row border p-4">
      <div class="col-md-4">
        <img src="images/img_1.png">
        <h6 class="mt-3">Party Name</h6>
        <h6>Candidate's Name</h6>
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <img src="image/img_1.png" class="party-symbol">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="row border p-4">
      <div class="col-md-4">
        <img src="images/img_1.png">
        <h6>Party Name</h6>
        <h6>Candidate's Name</h6>
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <img src="image/img_1.png" class="party-symbol">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="row border p-4">
      <div class="col-md-4">
        <img src="images/img_1.png">
        <h6>Party Name</h6>
        <h6>Candidate's Name</h6>
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <img src="image/img_1.png" class="party-symbol">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="row border p-4">
      <div class="col-md-4">
        <img src="images/img_1.png">
        <h6>Party Name</h6>
        <h6>Candidate's Name</h6>
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <img src="image/img_1.png" class="party-symbol">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="card pl-5">
    <div class="card-body">
      <img src="image/img_1.png" class="party-symbol">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div> -->
<?php
	include('includes/footer.php');
	?>
  <!-- Contact -->
  <!--<section id="contact-section">
    <div class="container-fluid text-center">
        <div class="section-header">
          <h2 class="smt"><span>Contact</span></h2>
        </div><br>
      <div class="row">
        <div class="col-md-4 address">
          <h3>Address</h3>
          <p><i class="fa fa-map-marker"></i>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
        </div>
        <div class="col-md-4 contact-details">
          <h3>Contact Details</h3>
          <p><i class="fa fa-envelope"></i>info@loremipsum.com</p>
          <p><i class="fa fa-phone"></i>+91-99999 99999</p>
        </div>
        <div class="col-md-4 social-links">
          <h3>Follow Us</h3>
          <a class="btn-link p-3" href="https://facebook.com"><i class="fa fa-facebook"></i></a>
          <a class="btn-link p-3" href="https://facebook.com"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>  
  </section>-->

  <!-- Footer -->

  <!--<footer class="w3-container w3-center p-2" style="z-index: 0;">
    <div class="w3-half">
        <h6><i class="fa fa-copyright w3-hover-opacity"></i> 2018. All rights reserved.</h6>
    </div>
    <div class="w3-third">
    </div>
    <div class="w3-half m-padding">
        <h6>Developed by <a target="_blank" class="no-underline brown" href="https://www.buddyest.com">Buddyest</a></h6>
    </div>
  </footer>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      new WOW.init();
    </script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>