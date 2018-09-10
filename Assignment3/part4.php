<!DOCTYPE html>
<html>
<head>
<title>Restaurants</title>
</head>
<body>
<?php
$restaurant_name = array("Chama Gaucha","Aviva by Kameel","Bone’s Restaurant","Umi Sushi Buckhead",
"Fandangles","Capital Grille","Canoe","One Flew South","Fox Bros. BBQ","South City Kitchen Midtown");
$average_cost=array("40.5","15","65","40","30","60.5","35.5","21","15","29");
$arrlength = count($restaurant_name);
$arr1=count($average_cost);
echo "<table>";
for($x=0;$x<10;$x++)
{
echo "<tr><td>";	
echo $restaurant_name[$x]." - Average Cost ".$average_cost[$x];
echo "</td></tr>";

}
echo "</table>";

?>

</body>
</html>
