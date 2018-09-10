
<!DOCTYPE html>
<html>
<head>
<title>Best Restaurants</title>
<link rel = "stylesheet" type = "text/css" href = "PART4.css">


</head>
<body>
<h1> The 10 best restaurants in Atlanta with sorted names </h1>

<?php
/*<br>
<h1> The 10 best restaurants in Atlanta </h1>

<?php*/
echo"<h2>The 10 best restaurants in Atlanta</h2>";

$restaurant = array ("Chama Gaucha", "Aviva by Kameel", "Bone’s Restaurant",
			  "Umi Sushi Buckhead", "Fandangles", "Capital Grille", "Canoe",
			  "One Flew South", "Fox Bros. BBQ", "South City Kitchen Midtown");

$avgcost = array ("$40.50", "$15.00", "$65.00", "$40.50", "$30.00", "$60.50",
		   "$35.50", "$21.00", "$15.00", "$29.00");

echo '<table class = "tble"/>';
echo '<tr>';
echo '<th class = "tbprop"> Restaurant </th>';
echo '<th class = "tbprop"> Average Price </th>';
echo '</tr>';
 for ($i = 0; $i < 10; $i++)
{
	echo '<tr>';
	echo '<td class = "tbprop">' .$restaurant[$i]. '</td>';
	echo '<td class = "tbprop">' .$avgcost[$i]. '</td>';
	echo '</tr><br/>';
}

echo"The 10 best restaurants in Atlanta with sorted names";
$restaurant = array ("Chama Gaucha"=>"$40.50", "Aviva by Kameel"=>"$15.00",
					 "Bone’s Restaurant"=>"$65.00", "Umi Sushi Buckhead"=>"$40.50",
					 "Fandangles"=>"$30.00", "Capital Grille"=>"$60.50",
					 "Canoe"=>"$35.50", "One Flew South"=>"$21.00",
					 "Fox Bros. BBQ"=>"$15.00", "South City Kitchen Midtown"=>"$29.00");

ksort($restaurant);

echo '<table class = "tble"/>';
echo '<tr>';
echo '<th class = "tbprop"> Restaurant </th>';
echo '<th class = "tbprop"> Average Price </th>';
echo '</tr>';
 foreach ($restaurant as $res=>$avgcost)
{
	echo '<tr>';
	echo '<td class = "tbprop">' .$res. '</td>';
	echo '<td class = "tbprop">' .$avgcost. '</td>';
	echo '</tr>';
}


/*?>
<br>
<h1 > The 10 best restaurants in Atlanta with sorted prices </h1>
<?php*/
echo"The 10 best restaurants in Atlanta with sorted prices";
$restaurant = array ("Chama Gaucha"=>"$40.50", "Aviva by Kameel"=>"$15.00",
					 "Bone’s Restaurant"=>"$65.00", "Umi Sushi Buckhead"=>"$40.50",
					 "Fandangles"=>"$30.00", "Capital Grille"=>"$60.50",
					 "Canoe"=>"$35.50", "One Flew South"=>"$21.00",
					 "Fox Bros. BBQ"=>"$15.00", "South City Kitchen Midtown"=>"$29.00");
asort($restaurant);
echo '<table class = "tble"/>';
echo '<tr>';
echo '<th class = "tbprop"> Restaurant </th>';
echo '<th class = "tbprop"> Average Price </th>';
echo '</tr>';
 foreach ($restaurant as $res=>$avgcost)
{
	echo '<tr>';
	echo '<td class = "tbprop">' .$res. '</td>';
	echo '<td class = "tbprop">' .$avgcost. '</td>';
	echo '</tr><br/>';
}

?>*/


?>


</body>
</html>
