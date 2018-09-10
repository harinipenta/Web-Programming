<!DOCTYPE html>
<html>
<body>
<?php
$str="I like phpI love php";
$x="php";
$pos=strpos($str,$x);

echo 'the letter after the first occurance of php is:' .substr($str,$pos+strlen($x),1);
?>
</body>
</html>