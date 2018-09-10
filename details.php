<!DOCTYPE html>
<html>
<head>
<style>
body{
background-color:lightblue;

}
.two{
padding:50px;
text-align:center;
}
</style>
</head>
<body>
<?php
 $title= $_POST["title"];
 $Firstname= $_POST["Firstname"];
   $Familyname= $_POST["Familyname"];
    $Address= $_POST["Address"];
echo"<h2 class='two'>Hello, $title $Firstname $Familyname of $Address</h2>";

?>
</body>
</html>