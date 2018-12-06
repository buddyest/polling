<!DOCTYPE html>
<html>
<head>
  <?php
	include('includes/head.php');
	?>
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

<!-- Voter Registration -->
<div class="text-center m-4">
  <button class="btn btn-secondary" id="voter-button">Voter Registration</button>
  <button class="btn btn-secondary" id="candidate-button">Leader Registration</button>
</div>
<div id="voter-registration" class="container mt-4" style="z-index: 1;">
    <h4 class="text-center">Voter Registration</h4>
    <?php
	if(isset($_GET['error']))
	{
		echo "<h2 style='color:red'>Registration in unsuccessful please try again..</h2>";
	}
	elseif(isset($_GET['success']))
	{
		echo "<h2 style='color:green'>Registration in successful please go to Login</h2>";
	}
	
	?>
    <form class="form-group" action="contentes/voter-registration.php" method="post">
      <p class=""><span class="font-weight-bold">Name*</span><br>
        <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
      </p>
      <p class=""><span class="font-weight-bold">Mobile Number*</span><br>
        <input type="text" class="form-control" placeholder="Enter Mobile Number" name="phone" required>
      </p>
      <p class=""><span class="font-weight-bold">Password*</span><br>
        <input type="password" class="form-control" placeholder="Enter Password" name="pass" required>
      </p>
      <p class=""><span class="font-weight-bold">Age*</span><br>
        <input type="number" class="form-control" placeholder="Enter Age" name="age" min="18" max="80">
      </p>
      <p class=""><span class="font-weight-bold">Select State*</span><br>
        <select class="form-control" name="state">
          <option disabled selected="selected">Select State</option>
          <option value="one">One</option>
          <option value="two">Two</option>
        </select>        
      </p>    
      <p class=""><span class="font-weight-bold">Select Constituency*</span><br>
        <select class="form-control" name="constituency">
          <option disabled selected="selected">Select Constituency</option>
          <option value="one">One</option>
          <option value="two">Two</option>
        </select> 
      </p>
      <p class=""><span class="font-weight-bold">Select Gender*</span><br>
        <select class="form-control" name="gender">
          <option disabled selected="selected">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </p>
      <div class="">
          <button class="btn btn-outline-dark w-25" type="submit" name="reg">Register</button>
          <button class="btn btn-outline-dark w-25 mt-auto" type="reset">Clear</button>
      </div>
    </form>
</div>
<div id="candidate-registration" style="display:none;" class="container mt-4" style="z-index: 1;">
    <h4 class="text-center">Leader Registration</h4>
    <form class="form-group" action="candidate.php">
      <p class=""><span class="font-weight-bold">Name*</span><br>
        <input type="text" class="form-control" placeholder="Enter Name" name="can-name" required>
      </p>
      <p class=""><span class="font-weight-bold">Party Name*</span><br>
        <input type="text" class="form-control" placeholder="Enter Name" name="party-name" required>
      </p>
      <p class=""><span class="font-weight-bold">Mobile Number*</span><br>
        <input type="text" class="form-control" placeholder="Enter Name" minlength="10" maxlength="10" name="can-phone" required>
      </p>
      <p class=""><span class="font-weight-bold">Age*</span><br>
        <input type="number" class="form-control" placeholder="Enter Age" name="can-age" min="18" max="25">
      </p>
      <p class=""><span class="font-weight-bold">Select State*</span><br>
        <select class="form-control" name="can-state">
          <option disabled selected="selected">Select State</option>
          <option value="one">One</option>
          <option value="two">Two</option>
        </select>        
      </p>    
      <p class=""><span class="font-weight-bold">Select Constituency*</span><br>
        <select class="form-control">
          <option disabled selected="selected">Select Constituency</option>
          <option value="one">One</option>
          <option value="two">Two</option>
        </select>        
      </p>
      <p class=""><span class="font-weight-bold">Select Gender*</span><br>
        <select class="form-control">
          <option disabled selected="selected">Select Gender</option>
          <option value="can-male">Male</option>
          <option value="can-female">Female</option>
        </select>
      </p>
      <p class=""><span class="font-weight-bold">Upload your Party Picture*</span><br>
          <input type='file' onchange="readURL(this);"/>
          <img id="profile" width="150" height="200" src="#" alt="your image"/>
      </p>
      <p class=""><span class="font-weight-bold">Upload your Picture*</span><br>
          <input type='file' onchange="readURL(this);"/>
          <img id="party" width="150" height="200" src="#" alt="your image"/>
      </p>
      <div class="">
          <button class="btn btn-outline-primary w-25" type="submit">Login</button>
          <button class="btn btn-outline-primary w-25 mt-auto">Clear</button>
      </div>
    </form>
</div>

  <!-- Contact -->
  <section id="contact-section">
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
  </section>

  <!-- Footer -->

  <footer class="w3-container w3-center p-2" style="z-index: 0;">
    <div class="w3-half">
        <h6><i class="fa fa-copyright w3-hover-opacity"></i> 2018. All rights reserved.</h6>
    </div>
    <div class="w3-third">
    </div>
    <div class="w3-half m-padding">
        <h6>Developed by <a target="_blank" class="no-underline brown" href="https://www.buddyest.com">Buddyest</a></h6>
    </div>
  </footer>

  <!-- Modal -->
  <div class="container">
  <!-- Modal -->
  <div class="modal mt-5 fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4>Login Here</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="register.php">
            <input type="text" class="form-control col-md-12" placeholder="Enter username" name=""><br>
            <input type="text" class="form-control col-md-12" placeholder="Enter password" name="">
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary w-100" data-dismiss="modal">Login</button>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php
	include('includes/external-scripts.php');
	?>
</body>
</html>