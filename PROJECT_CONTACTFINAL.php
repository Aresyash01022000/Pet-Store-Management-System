<html>
	<head>
		<title>PROJECT</title>
		<style>
			.jumbotron
				{
					background-image:url(miryam-leon-Jdpvhn6xA0w-unsplash.jpg);
				}
			.space
				{
					margin:120px;
				}
			.button1
				{
					position:relative;top:30px;width:150px;height:50px;
					left:-20px;
					margin-top:30px;margin-bottom:30px;
				}
			.labelname
				{
					font-size:27px;font-weight:200;font-family:'Courgette';
				}
			.head
				{
					font-size:50px;text-align:center;font-family:'times new roman';margin:30px;
				}
			.row
				{
				width:801px
				}
			.map	
				{
					
					margin-top:50px;			
					display: flex;
					align-items: center;
					justify-content: center;
				}
				
			#heading
				{
					text-align:center;
					font-size:90px;font-weight:500;font-family:'Courgette';
				}
			#color
				{
					background-color:#F3F3F3;
					

				}
			#footer
				{
					width:100%;height:500px;background-color:#A71717;
				}	
				
		</style>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	
	<body><div>
	<nav class="navbar navbar-expand-lg" style="background-color:#EA275C">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#" style="font-size:41px;">PetStore</a>

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="PROJECT_HOMEPAGE.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="PROJECT_ABOUTUS.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pets
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="PROJECT_PETDOG.php">Dog</a>
          <a class="dropdown-item" href="PROJECT_PETCAT.php">Cat</a>
          
        </div>
      </li>
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="PROJECT_PUPKART.php">Pupkart - Dog Food</a>
          <a class="dropdown-item" href="PROJECT_MEOWKART.php">Meowkart- Cat Food</a>
          <a class="dropdown-item" href="PROJECT_KART.php">Shopkart- All accessories</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="PROJECT_CONTACTFINAL.php">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
		<svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart3" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>
	<span class="one"></span>
	  <a class="btn btn-dark btn-lg my-2 my-sm-0" href="PROJECT_LOGIN_F.php" type="submit">LOGIN</a>
	  <span class="one"></span>
	  <a class="btn btn-dark btn-lg my-2 my-sm-0" href="PROJECT_REGISTRATION.php" type="submit">REGISTER</a>
    </form>
  </div>
</nav>
	</div>
		<div class="jumbotron">
			<p class="space"></p>
			<h1 id="heading">CONTACT US</h1>
			<p class="space"></p>
			
		</div>
		
		<div class="container">
				<div class="head">GET IN TOUCH WITH US</div>
					<form action="index.php" method="POST">	
						<form id="basic-form" action="" method="post">
							<div class="form">
								<div class="row">
									<label for="firstname" class="labelname">First name</label>
								<input type="text" class="form-control form-control-lg " id="firstname" required placeholder="First name" name="Fname">
								</div>
								
								<br>
								<div class="row">
								<label for="lastname" class="labelname">Last name</label>	
								<input type="text" class="form-control form-control-lg" id="lastname" required  placeholder="Last name" name="Lname">
								</div>
							<br>
							</div>
							<div class="form">
								<div class="row">
								<label for="email" class="labelname">Email</label>
								<input type="email" class="form-control form-control-lg" id="email" required  placeholder="Your Email" name="email">
								</div>
								<br>
								<div class="form">
								<div class="row">
								<label for="para" class="labelname">Your question</label>
								<input type="text" class="form-control form-control-lg" placeholder="Type" required id="para" name="message">
								</div>
								
								</div>
							<div>
							<button type="submit" name="sendmail" class="btn btn-danger button1">SUBMIT</button>
							</div>
						</form>
					</form>
				</div>
			</div>	
					<div class="head">VISIT US NOW</div>
					<div id="color">
					<div class="map">
						<!--Google map-->
						<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px;margin-top:45px;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.401333497107!2d72.8875203142123!3d19.046084307863126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c61fa3900001%3A0x5a1fb7fc5189ad74!2sVivekanand%20Education%20Society&#39;s%20College%20of%20Pharmacy!5e0!3m2!1sen!2sin!4v1600510120293!5m2!1sen!2sin" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0""></iframe><!--Google Maps-->
					</div>
					</div>
					</div>
				<div class="space"></div>
				<div id="footer"></div>
								
			<script>
				$(".button1").click(function()
				{
				alert('YOUR FORM IS SUBMITTED SUCCESSFULLY');
				})
		// Wait for the DOM to be ready
				$(document).ready(function() {
					$("#basic-form").validate();
				});
			$(document).ready(function() {
		$("#basic-form").validate({
    
    rules: {
      firstname: "required",
      lastname: "required",
	  email: {
        required: true,
        email: true
      },
	  para:"required"
	},
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
	  email: "Please enter a valid email address"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
			
			</script>
	
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	</body>
	
</html>