<?php


mysql_connect('localhost','root','');

mysql_select_db('dform');

$sql ="SELECT * FROM mydb";
$records = mysql_query($sql);
?>
		
<html>
<head>
<style>
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
<table id="user_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
			<thead>
				<tr>
					<th data-column-id="" data-type="numeric" data-identifier="true">id</th>
					<th data-column-id="" > Name</th>
					<th data-column-id="">Email</th>
					 

					
                    
					
				</tr> 
				<?php 

				while ($user=mysql_fetch_assoc($records)) {
					echo "<tr>";
					echo "<td>".$user['id']."</td>";	
					echo "<td>".$user['Name']."</td>";
                    echo "<td>".$user['Email']."</td>";
                    ?>
                    </thead>
                    </table>
                    </body>
                    </html>
