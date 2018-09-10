<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="page1.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body class="body">  
<div class="container">
<?php
// define variables and set to empty values
$nameErr = $pwdErr = "";
$name = $pwd = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["pwd"])) {
    $pwdErr = "password is required";
  }
  else{
  $pwd = $_POST['pwd'];
if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pwd)){
    echo "Your password is strong.";
} else {
    echo "Your password is not safe.";
}
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<table><tr><td>
<h1 calss="h1">Login Page</h1></td></tr>
<tr><td><p><span class="error">* required field.</span></p></td></tr>
<form method="post" action="page2.php" method="post">  
<tr><td>
  UserName: <input type="text" name="name" value="name">
  <span class="error">* <?php echo $nameErr;?></span></td></tr>
  <br><br>
 <tr><td> Password: <input type="password" name="pwd" value="pwd">
  <span class="error">* <?php echo $pwdErr;?></span></td></tr>
  <br><br>
 <tr><td> 
  <input type="submit" name="submit" value="Submit">  </td></tr>
  </table>
</form>

</div>

</body>
</html>