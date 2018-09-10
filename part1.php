<!DOCTYPE html>
<html>
<head>
<title>PART1</title>
</head>
<body>

<?php
function isBitten()
{
	$x=rand(1,100);

if($x<=50)
{
echo "<h2>charlie ate my lunch</h2>";
}
else 
{
	echo "<h2>charlie did not eat my lunch</h2>";
}}
isBitten();


	?>

</body>
</html>