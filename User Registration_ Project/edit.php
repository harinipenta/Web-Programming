<?php
mysql_connect('localhost','root','');

mysql_select_db('harini');


$sql ="SELECT * FROM registered_users WHERE id='$_GET[id]'";
$records = mysql_query($sql);


$user=mysql_fetch_assoc($records);

  


        //$query=mysql_query("select * from manuf where id='$id' ")or die(mysql_error());
        ////$row=mysql_fetch_array($query);

     

if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 
	}

	 // /* Email Validation */
	 // if(!isset($error_message)) {
		// if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
	 // 	$error_message = "Invalid Email Address";
		// }
	 // }

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
	if(!isset($_POST["gender"])) {
	$error_message = " All Fields are required";
	}
	}

	

	if(!isset($error_message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$uquery = "UPDATE  registered_users SET user_name ='$_POST[userName]',first_name = '$_POST[firstName]',last_name = '$_POST[lastName] ', qualification = '$_POST[qualification]', password = 'md5($_POST[password])' , email = '$_POST[userEmail]', gender=' $_POST[gender]' WHERE id = '$_POST[id] '";
		$uresult = $db_handle->insertQuery($uquery);
		if(!empty($uresult)) {
			$error_message = "";
			$success_message = "updated successfully!";	
			unset($_POST);
		} else {
			$error_message = "Problem in updating. Try Again!";	
		}
	}
}
?>
<html>
<head>

<title>PHP User Registration Form</title>
<style>
body{
	width:610px;
	font-family:calibri;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background: #d9eeff;
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;                 
}
</style>

</head>
<body>
<form name="frmRegistration" method="post" action="">
<input type="hidden" value="<?php echo " ".$user['id'].""?>" name="id">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>

<tr>
<td>User Name</td>
<td><input type="text" class="demoInputBox" name="userName" value="<?php echo " ".$user['user_name'].""?>"></td>
</tr>
<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox" name="firstName" value="<?php echo " ".$user['first_name'].""?>"></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" class="demoInputBox" name="lastName" value="<?php echo " ".$user['last_name'].""?>"></td>
</tr>
<tr>
<td>Qualification</td>
<td>
<select name="qualification" id="wgtmsr"  placeholder="Qualification" class="demoInputBox" style="width: 230px;">
  <option value="select"></option>
  <option value="Undergraduate">Undergraduate</option>
  <option value="MS">MS</option>
  <option value="PHD">PHD</option>
  
</select>
</td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="password" value="<?php echo " ".$user['password'].""?>"></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" class="demoInputBox" name="confirm_password" value="<?php echo " ".$user['confirmpassword'].""?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="userEmail" value="<?php echo " ".$user['email'].""?>"></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="Male" <?php if(isset($user['gender']) && $user['gender']=="Male") { ?>checked<?php  } ?>> Male
<input type="radio" name="gender" value="Female" <?php if(isset($user['gender']) && $user['gender']=="Female") { ?>checked<?php  } ?>> Female
</td>
</tr>
<tr>
<td colspan=2>
<input type="submit" name="register-user" value="Save" class="btnRegister">
<a href="disply_records.php"> <input type="button" name="Back to Records" value="Back to Records" class="btnRegister"> </a></td>
</tr>

</table>
</form>
</body></html>