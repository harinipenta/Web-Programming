<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="page2.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body class="body">  
<h1 align="center">Welcome to FunBox !!</h1>
<?php 
$name=$_POST['name'];
echo "<h2 align=center>Hi $name </h2>";

?>
<table class="t1">
<tbody>
<tr>
<th>Rock,Papers and Scissors</th>
<td><a href="http://codd.cs.gsu.edu/~sgopala1/project2/rockps.php"><img src="game1.jpg" alt="www.google.com" height="200" width="200" ></a></td>
</tr>
<tr>
<th>Personality Test</th>
<td><a href="http://codd.cs.gsu.edu/~sgopala1/project2/pp.html"><img src="game2.jpg" alt="www.google.com" height="200" width="200"></a></td>
</tr>
</tbody>
</table>
</body>
</html>