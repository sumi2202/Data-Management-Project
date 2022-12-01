<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="intro_page.css">
		<link  href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" type="text/css" rel="stylesheet">
				<title>Login - Meliora</title>
			
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
	
	<div class="split left">
		<div class="centered">
			<div class="row">
		<div class="column">
			<div id="wrap">
			<div class="cont_order" id="loginwrap">
					<form action="" method="post" id="logininformation" >
						<div class="information">
							<fieldset class="text-light">
								<legend><h2><strong>Login Into Personal Account</strong></h2></legend>
								<br><br>
								<label for="emailname"><p>Email</p></label>
								<input type='email' id="emailname" name="emailname">
								<br><br>
								<label for="password">Password</label>
								<input type='text' id="password"name="password">
								<br><br>
								<input type="submit" class="btn btn-dark" value="Submit">
								<br><br>
								<h5>Don't have an account?</h5>
								<a href="Signup.php" class="btn btn-dark">Click here to create an account</a> <!--add link to sign up -->

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
			<div class="split right d-sm-flex align-items-center justify-content-between">
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

<!-- php code for creating an account -->

<?php
error_reporting(0);

  //user
  $madeFname = $_POST['firstname'];
  $madeLname = $_POST['lastname'];
  $madeEmail = $_POST['emailname'];
  $madePass = $_POST['password'];

  
define("connectionString","mysql:host=localhost;dbname=meliora_db"); 
define("userName","root"); 
define("password","test");

try{
  
    $conn = new PDO(connectionString,userName,password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $use = $conn->lastInsertId();

    $useInfo = "INSERT INTO `userinfo` (`Fname`, `Lname`, `Email`, `Password`) VALUES (?,?,?,?)";
    $statement = $conn->prepare($useInfo);
	$statement->bindValue(1,$madeFname);
    $statement->bindValue(2,$madeLname);
    $statement->bindValue(3,$madeEmail);
    $statement->bindValue(4,$madePass);

    if ($statement->execute()){
      echo "Sumbitted";
    }
    
}catch(PDOException $e){
    echo $e->getMessage();
}
?>


<!-- php code for login -->
<?php

if (isset($_POST['emailname'])){
    $user = $_POST['emailname'];
}
if (isset($_POST['password'])){
    $pass = $_POST['password'];
}

$sname = "localhost";
$dbuser = "root";
$dbpass = "test";
$dbname = "meliora_db";

$conn = mysqli_connect($sname, $dbuser, $dbpass, $dbname);

if (!$conn) {
  echo "Connection Failed";
}

if(!empty($user) || !empty($pass)){
$sql = "SELECT * FROM userinfo WHERE Email='$user' AND Password='$pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)){
        echo '<script type="text/javascript">';
        echo 'alert("Login Successful!")';
        echo '</script>';
        echo '<script type="text/javascript">';
        echo 'window.location.href = \'http://localhost/Meliora/Home_Page_Dash.html\';';
        echo '</script>';
        // header("Location: Homepage.php");
        exit;
}else{
  echo '<script type="text/javascript">';
  echo 'alert("Incorrect Username or Password!")';
  echo '</script>';
  echo '</script>';
  echo '<script type="text/javascript">';
  echo 'window.location.href = \'http://localhost/Meliora/Login.php\';';
  echo '</script>';
  exit;
}
}

?>

