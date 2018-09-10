<!DOCTYPE html>
<html>
<head>
<title>Months for loop</title>
</head>
<body>
<?php
$month = array ('January', 'February', 'March', 'April',
 'May', 'June', 'July', 'August',
 'September', 'October', 'November', 'December'); 

  sort($month);
$arrlength = count($month);
for($x = 0; $x < $arrlength; $x++) {
    echo $month[$x];
    echo "<br>";
}
?>
</body>
</html>