<!DOCTYPE html>
<html>
<head>
<title>Months forech loop</title>
</head>
<body>
<?php
$month = array ('January', 'February', 'March', 'April',
 'May', 'June', 'July', 'August',
 'September', 'October', 'November', 'December'); 

sort($month);
foreach ($month as $value) {
    echo "$value <br>";
}
?>
</body>
</html>
  