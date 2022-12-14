<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="intro_page.css">
    <link  href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" type="text/css" rel="stylesheet">
            <title>Signup - Meliora</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-sm navbar-dark py-3 fixed-top" style="font-family: 'Montserrat', sans-serif; background-color: #0d3b66ff;">
        <div class ="container">
			<img class="d-inline-block align-text-center" src="assets/main_logo.png" alt="" width="70" height="70">
            <a href="Home_Page.html" class="navbar-brand" style="color:#f5f5f5ff;"><strong>Meliora</strong></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a href="#resources" class="nav-link dropdown-toggle " data-bs-toggle="dropdown" role="button">My Resources</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="sleep.html">Sleep</a></li>
                            <li><a class="dropdown-item" href="diets.html">Diets</a></li>
                            <li><a class="dropdown-item" href="exercise.html">Exercise</a></li>
                        </ul>
					</li>
                    <li class="nav-item">
                        <a href="Login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="Signup.php" class="nav-link">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
       </nav>
	   <link href="mainwrap.css" rel="stylesheet">
	
	   <div class="split left d-sm-flex align-items-center justify-content-between">
		   <div class="centered">
			   <div class="row ">
		   <div class="column p-5">
			   <div id="wrap">
			   <div class="cont_order" id="loginwrap">
				<form action="Login.php" method="post" id="logininformation">
					<div class="information">
						<fieldset class="text-light p-5">
							<legend><h2><strong>Sign up for personal account</strong></h2></legend>
							<br><br>
							<label for="firstname">First Name</label>
							<input type='text' id="firstname" name=firstname>
							<br><br>
							<label for="lastname">Last Name</label>
							<input type='text' id="lastname" name=lastname>
							<br><br>
							<label for="emailname">Email</label>
							<input type='email' id="emailname" name="emailname">
							<br><br>
							<label for="password">Password</label>
							<input type='text' id="password"name="password">
							<br><br>
							<input type="submit" class="btn btn-dark" value="Submit">
							<br><br>
							<h5>Already have an account?</h5>
							<a href="Login.php" class="btn btn-dark">Click here to login</a> <!--add link to sign up -->

						</fieldset>
					</div>
				</form>
				   </div> <!-- end of cont_order-->
		   </div>
		   </div>
		   <div class="column">
			   <!--Put some pictures here -->
			
		   </div>
	   </div>
		   </div>
	   </div>
	   
			<div class="split right">
				<div class="centered">
		
						<div class="mySlides fade">
							<img src="assets/flower1.png" style="width:100%">
						</div>
						<div class="mySlides fade">
							<img src="assets/sleeping2.png" style="width:100%">
						</div>
						<div class="mySlides fade">
							<img src="assets/meditation2.png" style="width:100%">
						</div>
						<div style="text-align:center">
							<span class="dot"></span>
							<span class="dot"></span>
							<span class="dot"></span>
						</div>
						
		<script>
		let slideIndex = 0;
		showSlides();
		
		function showSlides() {
		  let i;
		  let slides = document.getElementsByClassName("mySlides");
		  let dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 4000); // Change image every 4 seconds
		}
		</script>
		
		   </div>
	   </div>
	   <section>
		<nav class="navbar navbar-expand-sm navbar-dark py-2 bottom" style="font-family: 'Montserrat', sans-serif; background-color: transparent;">
			<div class ="container">
				<a href="Home_Page.html" class="navbar-brand" style="color:#f5f5f5ff;"></a>
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a href="contact.html" class="nav-link">Need Help?</a>
						</li>
					</ul>
				</div>
			</div>
		   </nav> 
	   </section> 
   
   <br>
   <br>
   <br>
	   
	   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	   <section>
		<nav class="navbar navbar-expand-sm navbar-dark py-2 fixed-bottom" style="font-family: 'Montserrat', sans-serif; background-color: transparent;">
			<div class ="container">
				<a href="Home_Page.html" class="navbar-brand" style="color:#f5f5f5ff;"></a>
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a href="contact.html" class="nav-link">Need Help?</a>
						</li>
					</ul>
				</div>
			</div>
		   </nav> 
	   </section> 
	</body>

</html>
