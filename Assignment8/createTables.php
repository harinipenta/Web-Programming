<html>
<body>
<?php
$servername = "localhost";
$username = "teerpina1";
$password = "teerpina1";
$dbname = "teerpina1";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$id = $_POST['id'];
$phone = $_POST['phone'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//@mysql_select_db($dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO Artists VALUES ('$fname','$lname',$id,'$phone')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


</body>
</html>
