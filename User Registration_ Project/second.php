<?php
if(!empty($_POST["table1"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
		/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

?>
if(!isset($error_message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO registered_users (user_name, first_name, last_name, qualification, password, email, gender) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . $_POST["qualification"] . "','" . md5($_POST["password"]) . "', '" . $_POST["userEmail"] . "', '" . $_POST["gender"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
	}
}


<html>
<head>
<style>
body{
	width:610px;
	letter-spacing:100px
	padding:10px;
	font-family:calibri;
	text-align:center;
    align:center;

}</style>
<body>
<div class="container">
<div class="col-sm-8">
<div class="well clearfix">
			<div class="pull-right">
<form action= "welcome.php" method="post">
Name:<input type="text" name="name"><br>
E-mail:<input type="text" name="email"><br>
<input type="submit">
<a href="records.php"><input type="button" name="view records" value="view records"></a>
</form>
</div>
</body>

</html>
