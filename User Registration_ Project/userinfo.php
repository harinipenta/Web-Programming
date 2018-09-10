<?php
mysql_connect('localhost','root','');

mysql_select_db('harini');

$sql ="SELECT * FROM registered_users WHERE id='$_GET[id]'";
$records = mysql_query($sql);
?>


<!DOCTYPE html>
<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

#customers td, #customers th {
    border: 4px solid #ddd;
    padding: 10px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
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
<div class="container">
<table id="customers">
  <tr>
  <th>S.No.</th>
    <th>User Name</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Qualification</th>
    <th>Email</th>
    <th>Gender</th>
  </tr>
  <tr>
    
  </tr>
  <?php 

        while ($user=mysql_fetch_assoc($records)) {
          echo "<tr>";
                    echo "<td>".$user['id']."</td>";
                    echo "<td>".$user['user_name']."</td>";
                    echo "<td>".$user['first_name']."</td>";
                    echo "<td>".$user['last_name']."</td>";
                    echo "<td>".$user['qualification']."</td>";
                    echo "<td>".$user['email']."</td>";
                    echo "<td>".$user['gender']."</td>";
                    echo "</tr>";
        }
        ?>

        
                    

</table>
<div>
<br></br>
<a href="disply_records.php"> <input type="button" name="Back to records" value="Back to Records" class="btnRegister"> </a></td>

</div>
</body>
</html>
