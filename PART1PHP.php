
<!DOCTYPE html>
<html>
<body>
<?php
$font = $_GET["Font"];
$fontstyle = $_GET["Font-style"];
$fontsize = $_GET["Font-size"];
$color = $_GET["color"];
$text = $_GET["Text"];
echo ("<p style= 'font-family = $font; font-style: $fontstyle; font-size: $fontsize; color: $color'>".$text."</p>");
?>
</body>
</html>
