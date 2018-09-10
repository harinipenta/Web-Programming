<html>
<head>
<link rel="stylesheet" type="text/css" href="./home.css"/>
</head>
<body>
<?php
// define variables and set to empty values
$dateErr = $musicErr = $moviesErr = $occupationErr = $sparetimeErr = $colorErr  = $foodErr= $holidayErr= $placeErr= $personErr="";
$date = $music = $movies = $occupation = $sparetime = $color = $food = $holiday= $place= $person="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo '<table><center>';
  if (empty($_POST["date"])) {
    $dateErr = "Date Choice Required";
    echo $dateErr;
  } else {
    $date = test_input($_POST["date"]);
    
    }
  
  if (empty($_POST["music"])) {
    $musicErr = "Music Choice Required";
    echo $musicErr;
  } else {
    $music = test_input($_POST["music"]);
    
    
  }
    
   if (empty($_POST["movies"])) {
    $moviesErr = "Movie Choice Required";
    echo $moviesErr;
  } else {
    $movies = test_input($_POST["movies"]);
  
    
  }

  if (empty($_POST["occupation"])) {
    $occupationErr = "Occupation Choice Required";
    echo $occupationErr;
  } else {
    $occupation = test_input($_POST["occupation"]);
  }

   if (empty($_POST["sparetime"])) {
    $sparetimeErr = "Spare Time Choice required";
    echo $sparetimeErr;
  } else {
    $sparetime = test_input($_POST["sparetime"]);
  }
  if (empty($_POST["color"])) {
    $colorErr = "Color Choice required";
    echo $colorErr;
  } else {
    $color = test_input($_POST["color"]);
  }
   if (empty($_POST["food"])) {
    $foodErr = "Food Choice required";
    echo $foodErr;
  } else {
    $food = test_input($_POST["food"]);
    
  }
   if (empty($_POST["holiday"])) {
    $holidayErr = "Holiday Choice required";
    echo $holidayErr;
  } else {
    $holiday = test_input($_POST["holiday"]);
  }
   if (empty($_POST["place"])) {
    $placeErr = "Place Choice required";
    echo $placeErr;
  } else {
    $place = test_input($_POST["place"]);
  }
 if (empty($_POST["person"])) {
    $personErr = "Person Choice required";
    echo $personErr;
  } else {
    $person = test_input($_POST["person"]);
  }
  if($date=="candlelightdinner" && $music=="country" &&  $movies=="romance" && $occupation=="cashier" && $sparetime=="music" && $color=="skyblue" && $food=="pasta" && $holiday=="valentinesday" && $place=="paris" && $person=="attractive"){
  echo '<tr><td>'.'<img src="cindrella.jpg" class="img">'.'</td></tr>';
  echo '<br>';
  echo '<tr><td>'.'Cindrella'.'</td></tr>';
  }
  else if($date=="funthemepark" && $music=="pop" &&  $movies=="horror" && $occupation=="police" && $sparetime=="tv" && $color=="yellow" && $food=="burger" && $holiday=="halloween" && $place=="lasvegas" && $person=="fun"){
  echo '<tr><td>'.'<img src="dracula.jpg" class="img">'.'</td></tr>';
  echo '<br>';
  echo '<tr><td>'.'Dracula'.'</td></tr>';
  }
  else if($date=="painting" && $music=="softrock" &&  $movies=="comedy" && $occupation=="waiter" && $sparetime=="sleep" && $color=="white" && $food=="sushi" && $holiday=="christmas" && $place=="hollywood" && $person=="sentimental"){
  echo '<tr><td>'.'<img src="mrbean.jpg" class="img">'.'</td></tr>';
  echo '<br>';
  echo '<tr><td>'.'Mr Bean'.'</td></tr>';
  }
  else if($date=="rockconcert" && $music=="rocknroll" &&  $movies=="musical" && $occupation=="sportsplayer" && $sparetime=="exercise" && $color=="red" && $food=="pizza" && $holiday=="newyear" && $place=="hawaii" && $person=="party"){
  echo '<tr><td>'.'<img src="johnnybravo.gif" class="img">'.'</td></tr>';
  echo '<br>';
  echo '<tr><td>'.'Johnny Bravo'.'</td></tr>';
  }
  else if($date=="movie" && $music=="alternative" &&  $movies=="documentary" && $occupation=="teacher" && $sparetime=="read" && $color=="darkblue" && $food=="salad" && $holiday=="thanksgiving" && $place=="spain" && $person=="smart"){
  echo '<tr><td>'.'<img src="spiderman.jpg" class="img">'.'</td></tr>';
  echo '<br>';
  echo '<tr><td>'.'Spiderman'.'</td></tr>';
  }
  else{
  echo '<tr><td>'.'<img src="donaldduck.jpg" class="img">'.'</td></tr>';
  echo '<br>';
  echo '<tr><td>'.'Donald Duck'.'</td></tr>';
  }
  echo '</center></table>';
}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

</body>
</html>
