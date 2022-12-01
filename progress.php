<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="prog.css">
        <link  href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" type="text/css" rel="stylesheet">
            <title>Diets - Meliora</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>




<body>
<nav class="navbar navbar-expand-sm navbar-dark py-2 fixed-top" style="font-family: 'Montserrat', sans-serif; background-color: #0d3b66ff;">
            <div class ="container">
                <a href="Home_Page_Dash.html" class="navbar-brand" style="color:#f5f5f5ff;">
                    <img class="d-inline-block align-text-center" src="assets/main_logo.png" alt="" width="70" height="70">
                    <h><strong>Meliora</strong></h>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#resources" class="nav-link dropdown-toggle " data-bs-toggle="dropdown" role="button">My Resources</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="sleep_dash.html">Sleep</a></li>
                                <li><a class="dropdown-item" href="diets_dash.html">Diets</a></li>
                                <li><a class="dropdown-item" href="exercise_dash.html">Exercise</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/Meliora/Dashboard.php" class="nav-link">My Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="Home_Page.html" class="nav-link">Log Out</a>
                        </li>
                        <li class="nav-item">
                          <a href="Home_Page.html" class="nav-link">Log Out</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>

<?php

#Need to get info from all 5 tables
#Get numeric info from tables with specfic email
#average them
#display
#place in progression table

try{
  
  $servername = "localhost";
  $username = "root";
  $password = "test";
  $dbname = "meliora_db";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  
  $useID= $_POST['prouserID'];
    //For diet but using Food group from phys
    $dietStart = "SELECT AVG(Food_groups_used) AS dietA FROM `physicalgoals` WHERE puserID='$useID'";
    $moodStat = "SELECT AVG(GraditudeLevel) AS moodA FROM `mood` WHERE MoodID='$useID'";
    $sleepStat = "SELECT AVG(TimeSlept) AS sleepA FROM `sleep` WHERE SleepID='$useID'";
    $stressStat = "SELECT AVG(AnxietyLevel) AS stressA FROM `stress` WHERE StressID='$useID'";
    $physStat = "SELECT AVG(Steps) AS physA FROM `physicalgoals` WHERE puserID='$useID'";

    $statement = $conn->query($dietStart);
    $statement2 = $conn->query($moodStat);
    $statement3 = $conn->query($sleepStat);
    $statement4 = $conn->query($stressStat);
    $statement5 = $conn->query($physStat);

    if ($diet = mysqli_fetch_array($statement)){
      $davg = $diet['dietA'] * 100 / 5;
    }
    if ($mood = mysqli_fetch_array($statement2)){
      $mavg = $mood['moodA'] * 100 / 10;
    }
    if ($sleep = mysqli_fetch_array($statement3)){
      $savg = $sleep['sleepA'];
    }
    if ($stress = mysqli_fetch_array($statement4)){
      $stavg = $stress['stressA'] * 100 / 10;
    }
    if ($phys = mysqli_fetch_array($statement5)){
      $pavg = $phys['physA'] * 100 / 100;
    }

?>

<br><br><br><br><br><br>
<div class="container">
  <div class="row g-4">
    <div class="col-md">
      <div class="card">
    <table style="font-family: 'Montserrat' sans-serif; border-spacing: 30px;">
      <tr>
        <th>Email</th>
        <th>Diet</th>
        <th>Mood</th>
        <th>Sleep</th>
        <th>Stress</th>
        <th>Physical Health</th>
      </tr>
    <!--#while ($diet = mysqli_fetch_array($statement) && $mood = mysqli_fetch_array($statement2) && $sleep = mysqli_fetch_array($statement3) && $stress = mysqli_fetch_array($statement4) && $phys = mysqli_fetch_array($statement5)){
      echo "<table border =1><tr><th>Email</th><th>Diet</th><th>Mood</th><th>Sleep</th><th>Stress</th><th>Physical Health</th></tr>";
      // output data of each row-->




<?php
      echo "<tr><td>".'  '.$useID.'  '."</td><td>".$davg.' %'."</td><td>".$mavg.' %'."</td><td>".$savg.' (h)'."</td><td>".$stavg.' %'."</td><td>".$pavg.' Steps'."</td></tr>";
      
      #echo "</table>";
    
    
  #}

}catch(PDOException $e){
    echo $e->getMessage();
}

?>

</table>
</div>
</div>
</div>
</div>

<section>
            <nav class="navbar navbar-expand-sm navbar-dark py-2 bottom" style="font-family:'Montserrat',sans-serif; background-color:transparent;">
                <div class ="container">
                    <a href="Home_Page.html" class="navbar-brand" style="color:#f5f5f5ff;"></a>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="contact_dash.html" class="nav-link">Need Help?</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 
        </section>

<div class="container">
  <div class="row g-2">
    <div class="col">
      <div class="card">
        <a href="Meliora\templates\Views_Table.html" class="btn btn-dark align-items-center">Views</a>

</div>
</div>
</div>
</div>


</body>







</html>