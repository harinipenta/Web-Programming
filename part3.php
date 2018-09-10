
<!DOCTYPE html>
<html>
<head>
<title>List of months</title>
<style>
body{

background-color:lightyellow
}
h1{
	color:brown;
}
</style>


<body >
<h1> List of months in order</h1>
<br>
<?php
$month = array ("January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December");
for ($i = 0; $i < 12; $i++)
{
	echo $month [$i];
	echo "<br>";
}
?>
<br>
<h1> List of months in alphabetical order</h1>
<?php
$month = array ("January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December");
sort($month);
for ($i = 0; $i < 12; $i++)
{
	echo $month[$i];
	echo "<br>";
}
?>
<br>
<h1> List of months using "foreach" statement</h1>
<?php
$month = array ("January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December");

foreach ($month as $var)
{
	echo $var;
	echo "<br>";
}
?>
<br>
<h1> List of months in alphabetical order using "foreach" statement</h1>
<?php
$month = array ("January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December");
sort($month);
foreach ($month as $var)
{
	echo $var;
	echo "<br>";
}
?>
</body>
</html>
