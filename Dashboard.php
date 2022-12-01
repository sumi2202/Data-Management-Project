<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="physicalstyle.css">
    <link  href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" type="text/css" rel="stylesheet">
        <title>My Dashboard - Meliora</title>
    
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
                      <a href="Home_Page.html" class="nav-link">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="bgpicP p-5 text-center text-sm-start" style="font-family: 'Montserrat', sans-serif; font-size:larger; background-image:linear-gradient(#0d3b66ff, #0d3b66ff,#2d848aff); color:#f5f5f5ff;">
      <div class="container">
       <div class="p-5 d-sm-flex align-items-center justify-content-between">
           <div>
           <h1><strong>My Dashboard</strong></h1>
           <p class="lead my-4">
               Welcome!
           </p>
           </div>
       </div>
      </div>
   </section>
    
    <section class="p-5 text-center text-sm-start justify-content-center">
      <div class="container">
        <div class="row g-5">
              <!--First survery-->
              <div class="col-md-6">
                <div class="card p-5 row g-0 border rounded flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #f5f5f5ff;">
                  <div class="col p-4 d-flex flex-column position-static">
                    <img src="assets/vegetables3.png" class="d-sm-flex d-none align-items-center" alt="..." width="70" height="70">
                    <strong class="d-inline-block mb-2" style="color:#2d848aff">Questionaire</strong>
                    <h3 class="mb-0">Daily Diet</h3>
                    <div class="mb-1 text-muted">5 min</div>
                    
                    <br>
                    <!--Diet Form-->
                    <form action="" method="post">
                      <fieldset id="dietForm">
  
                        <label for="dietmail">Email:</label>
                        <input type="text" id="dietmail" name="dietmail" required><br><br>
  
                        <label for="dietDate">Date:</label>
                        <input type="date" id="dietDate" name="dietDate" required><br><br>
  
                        <label for="protein">Amount of Protein (mg):</label>
                        <input type="number" id="protein" name="protein" step="0.1" min="0" max="200"><br><br>
  
                        <label for="water">Water Intake (L):</label>
                        <input type="number" id="water" name="water" step="0.01"><br><br>
  
                        <label for="fibre">Fibre Intake (g):</label>
                        <input type="number" id="fibre" name="fibre" step="0.1"><br><br>
  
                        <label for="carbs">Amount of carbs (g):</label>
                        <input type="number" id="carbs" name="carbs" step="0.5"><br><br>
  
                        <label for="fat">Fat Intake (g):</label>
                        <input type="number" id="fat" name="fat" step="0.5"><br><br>

                      <input type="submit" class="btn btn-light mt-3" value="submit">

                    </fieldset>
                  </form>
                  </div>
                  
                </div>
                
              </div>
    
              <!--Second Survery-->
              <div class="col-md-6">
                <div class="card p-5 row g-0 border rounded flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #f5f5f5ff;">
                  <div class="col p-4 d-flex flex-column position-static">
                    <img src="assets/journal4.png" class="d-sm-flex d-none align-items-center" alt="..." width="70" height="70">
                    <strong class="d-inline-block mb-2" style="color:#2d848aff">Questionaire</strong>
                    <h3 class="mb-0">Mood</h3>
                    <div class="mb-1 text-muted">10 min</div>
                    <br>
                    <!--Mood Form-->
                    <form action="" method="post">
                      <fieldset id="moodForm">
  
                        <label for="moodemail">Email:</label>
                        <input type="text" id="moodemail" name="moodemail" required><br><br>
  
                        <label for="moodDate">Date:</label>
                        <input type="date" id="moodDate" name="moodDate" required><br><br>

                        <p><label for="reflection">Reflection of your day:</label></p>
                        <textarea id="reflection" name="reflection" rows="4" cols="50"></textarea><br><br>

                        <label for="graditude">Graditude Level:</label>
                        <input type="range" id="graditude" class="scroll d-sm-flex" name="graditude" step="1" min="0" max="10"><br><br>

                        
                        <input type="submit" class="btn btn-light mt-3" value="Submit">
                      </fieldset>
                    </form>
                  </div>
                  
                </div>
              </div>
          </div>
        </div>
    </section>
    <section class="p-5 text-center text-sm-start justify-content-center">
      <div class="container">
        <div class="row g-5">
              <!--Third Survery-->
              <div class="col-md-6">
                <div class="card row g-0 border rounded flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #f5f5f5ff;">
                  <div class="col p-4 d-flex flex-column position-static">
                    <img src="assets/sleeping5.png" class="d-sm-flex d-none align-items-center" alt="..." width="70" height="70">
                    <strong class="d-inline-block mb-2" style="color:#2d848aff">Questionaire</strong>
                    <h3 class="mb-0">Sleep</h3>
                    <div class="mb-1 text-muted">10 min</div>
                    <br>
                    <!--Sleep Form-->
                    <form action="" method="post">
                      <fieldset id="sleepForm">
  
                        <label for="sleepmail">Email:</label>
                        <input type="text" id="sleepmail" name="sleepmail" required><br><br>
  
                        <label for="sleepDate">Date:</label>
                        <input type="date" id="sleepDate" name="sleepDate" required><br><br>

                        <label for="sleepTime">Number of Hours Slept:</label>
                        <input type="number" id="sleepTime" name="sleepTime" step="0.5"><br><br>
                        
                        <label for="readTime">Number of Hours Spent Reading:</label>
                        <input type="number" id="readTime" name="readTime" step="0.25"><br><br>

                        <input type="submit" class="btn btn-light mt-3" value="Submit">
                      </fieldset>
                    </form>
                  </div>
                  </div>
                </div>
        

              <!--Fourth Survery-->
              <div class="col-md-6">
                <div class="card row g-0 border rounded flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #f5f5f5ff;">
                  <div class="col p-4 d-flex flex-column position-static">
                    <img src="assets/brain3.png" class="d-sm-flex d-none align-items-center" alt="..." width="70" height="70">
                    <strong class="d-inline-block mb-2" style="color:#2d848aff">Questionaire</strong>
                    <h3 class="mb-0">Stress</h3>
                    <div class="mb-1 text-muted">10 min</div>
                    <br>
                    <!--Stress Form-->
                    <form action="" method="post">
                      <fieldset id="stressForm">
  
                        <label for="stressmail">Email:</label>
                        <input type="text" id="stressmail" name="stressmail" required><br><br>
  
                        <label for="stressDate">Date:</label>
                        <input type="date" id="stressDate" name="stressDate" required><br><br>

                        <label for="social">Social Level:</label>
                        <input type="range" id="social" name="social" step="1" min="0" max="10"><br><br>

                        <label for="anxiety">Anxiety Level:</label>
                        <input type="range" id="anxiety" name="anxiety" step="1" min="0" max="10"><br><br>

                        <input type="submit" class="btn btn-light mt-3" value="Submit">
                      </fieldset>
                    </form>
                  </div>
                  
                </div>
              </div>

            </div>
            </div>
    </section>
    <section class="p-5 text-center text-sm-start justify-content-center">      
      <div class="container">
        <div class="row g-5">
      <!--Fifth Survery-->
              <div class="col-md-6">
                <div class="card row g-0 border rounded flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #f5f5f5ff;">
                  <div class="col p-4 d-flex flex-column position-static">
                    <img class="d-sm-flex d-none align-items-center" src="assets/running-man1.png" alt="" width="70" height="70">
                    <strong class="d-inline-block mb-2" style="color:#2d848aff">Questionaire</strong>
                    <h3 class="mb-0">Physical Health</h3>
                    <div class="mb-1 text-muted">10 min</div>
                    <br>
                    <!--Physical Goals Form-->
                    <form action="" method="post">
                      <fieldset id="physForm">
  
                        <label for="puserID">Email:</label>
                        <input type="text" id="puserID" name="puserID" required><br><br>
  
                        <label for="physDate">Date:</label>
                        <input type="date" id="physDate" name="physDate" required><br><br>

                        <label for="steps">Daily Steps:</label>
                        <input type="number" id="steps" name="steps" step="1"><br><br>

                        <label for="startDate">Menstrual Cycle Start Date:</label>
                        <input type="date" id="startDate" name="startDate"><br><br>

                        <label for="endtDate">Menstrual Cycle End Date:</label>
                        <input type="date" id="endtDate" name="endtDate"><br><br>
                        
                        <label for="weights">Max Weight Lifted (kg):</label>
                        <input type="number" id="weights" name="weights" step="1"><br><br>

                        <label for="food">Number of Food Groups Used:</label>
                        <input type="number" id="food" name="food" step="1" min="0" max="5"><br><br>

                        <input type="submit" class="btn btn-light mt-3" value="Submit">
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>

              <!--Progress Stats-->
              <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #f5f5f5ff;">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Questionaire</strong>
                    <h3 class="mb-0">Progress</h3>
                    <div class="mb-1 text-muted">10 min</div>
                    <br>
                    <!--Progress Form-->
                    <form action="progress.php" method="post">
                      <fieldset id="progForm">
  
                        <label for="prouserID">Email:</label>
                        <input type="text" id="prouserID" name="prouserID" required><br><br>

                        <input type="submit" class="btn btn-light mt-3" value="Submit">
                      </fieldset>
                    </form>
                  </div>
                  
                </div>
              </div>
        </div>
      </div>
    </section>

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
    </body>

</html>

<?php
error_reporting(0);

  //Diet
  $dietID = $_POST['dietmail'];
  $dietDate = $_POST['dietDate'];
  $protein = $_POST['protein'];
  $water = $_POST['water'];
  $fibre = $_POST['fibre'];
  $carbs = $_POST['carbs'];
  $fat = $_POST['fat'];

  //Mood
  $moodID = $_POST['moodemail'];
  $moodDate = $_POST['moodDate'];
  $reflection = $_POST['reflection'];
  $graditude = $_POST['graditude'];

  //Sleep
  $sleepID = $_POST['sleepmail'];
  $sleepDate = $_POST['sleepDate'];
  $sleepTime = $_POST['sleepTime'];
  $readTime = $_POST['readTime'];

  //Stress
  $stressID = $_POST['stressmail'];
  $stressDate = $_POST['stressDate'];
  $social = $_POST['social'];
  $anxiety = $_POST['anxiety'];

  //phys
  $puserID = $_POST['puserID'];
  $physDate = $_POST['physDate'];
  $steps = $_POST['steps'];
  $startDate = $_POST['startDate'];
  $endDate = $_POST['endtDate'];
  $weights = $_POST['weights'];
  $food = $_POST['food'];
  

define("connectionString","mysql:host=localhost;dbname=meliora_db"); 
define("userName","root"); 
define("password","test");

try{
  
    $conn = new PDO(connectionString,userName,password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $diet = $conn->lastInsertId();

    if(!empty($_POST['dietmail']) && !empty($_POST['dietDate'])){
 
    $dietInfo = "INSERT INTO `diet` (`DietID`, `DayOf`, `Protein`, `WaterConsumption`, `FibreIntake`, `Carbs`, `FatIntake`) VALUES (?,?,?,?,?,?,?)";
    $statement = $conn->prepare($dietInfo);
    $statement->bindValue(1,$dietID);
    $statement->bindValue(2,$dietDate);
    $statement->bindValue(3,$protein);
    $statement->bindValue(4,$water);
    $statement->bindValue(5,$fibre);
    $statement->bindValue(6,$carbs);
    $statement->bindValue(7,$fat);

    if ($statement->execute()){
      echo "Sumbitted";
    }
    }

    if(!empty($_POST['moodemail']) && !empty($_POST['moodDate'])){

    $moodInfo = "INSERT INTO `mood` (`MoodID`, `SelfReflection`, `DayOf`, `GraditudeLevel`) VALUES (?,?,?,?)";
    $statement2 = $conn->prepare($moodInfo);
    $statement2->bindValue(1,$moodID);
    $statement2->bindValue(2,$reflection);
    $statement2->bindValue(3,$moodDate);
    $statement2->bindValue(4,$graditude);

    
    if ($statement2->execute()){
      echo "Sumbitted";
    }
  }

  if(!empty($_POST['sleepmail']) && !empty($_POST['sleepDate'])){

    $sleepInfo = "INSERT INTO `sleep` (`SleepID`, `DayOf`, `TimeSlept`, `Reading`) VALUES (?,?,?,?)";
    $statement3 = $conn->prepare($sleepInfo);
    $statement3->bindValue(1,$sleepID);
    $statement3->bindValue(2,$sleepDate);
    $statement3->bindValue(3,$sleepTime);
    $statement3->bindValue(4,$readTime);

    
    if ($statement3->execute()){
      echo "Sumbitted";
    }
  }

  if(!empty($stressID) && !empty($stressDate)){

    $stressInfo = "INSERT INTO `stress` (`StressID`, `DayOf`, `SocialLevel`, `AnxietyLevel`) VALUES (?,?,?,?)";
    $statement4 = $conn->prepare($stressInfo);
    $statement4->bindValue(1,$stressID);
    $statement4->bindValue(2,$stressDate);
    $statement4->bindValue(3,$social);
    $statement4->bindValue(4,$anxiety);

    
    if ($statement4->execute()){
      echo "Sumbitted";
    }
  }

  if(!empty($puserID) && !empty($physDate) && !empty($startDate) && !empty($endDate)){

    $physInfo = "INSERT INTO `physicalgoals` (`puserID`, `Goals_date`, `Steps`, `Menstrual_cycle_startdate`, `Menstrual_cycle_endate`, `Weights_lifted`, `Food_groups_used`) VALUES (?,?,?,?,?,?,?)";
    $statement5 = $conn->prepare($physInfo);
    $statement5->bindValue(1,$puserID);
    $statement5->bindValue(2,$physDate);
    $statement5->bindValue(3,$steps);
    $statement5->bindValue(4,$startDate);
    $statement5->bindValue(5,$endDate);
    $statement5->bindValue(6,$weights);
    $statement5->bindValue(7,$food);

    
    if ($statement5->execute()){
      echo "Sumbitted";
    }
  }

  if(!empty($puserID) && !empty($physDate) && empty($startDate) && empty($startDate)){

    $physInfo = "INSERT INTO `physicalgoals` (`puserID`, `Goals_date`, `Steps`, `Weights_lifted`, `Food_groups_used`) VALUES (?,?,?,?,?)";
    $statement6 = $conn->prepare($physInfo);
    $statement6->bindValue(1,$puserID);
    $statement6->bindValue(2,$physDate);
    $statement6->bindValue(3,$steps);
    $statement6->bindValue(4,$weights);
    $statement6->bindValue(5,$food);

    
    if ($statement6->execute()){
      echo "Sumbitted";
    }
  }

}catch(PDOException $e){
    echo $e->getMessage();
}
?>




