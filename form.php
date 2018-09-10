<!DOCTYPE html>
<html>
<style>
body{
	background-color:lightyellow;
}
.one{
	text-align:center;
	padding:50px;
}

</style>
<head>
<body>
<?php
 $name= $_POST["name"];
echo "<h2 class='one'>Hello, $name</h2>";
?>
</body>
</html>
