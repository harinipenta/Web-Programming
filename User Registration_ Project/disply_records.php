<?php


mysql_connect('localhost','root','');

mysql_select_db('harini');

$sql ="SELECT * FROM registered_users";
$records = mysql_query($sql);
//$uid = mysql_result($records);


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
<link href="dist/jquery.bootgrid.css" rel="stylesheet" />
<script src="dist/jquery-1.11.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>
<script src="dist/jquery.bootgrid.min.js"></script>

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
</style>
</head>
<body>
	<div class="container">
      <div class="">
        <h1>Students List</h1>
        <div class="col-sm-8">
		<div class="well clearfix">
			<div class="pull-right">
			<a href="reg.php"> <input type="button" name="add records" value="Add Record" class="btnRegister"> </a></td></div></div>
		<table id="user_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
			<thead>
				<tr>
					<th data-column-id="" data-type="numeric" data-identifier="true">id</th>
					<th data-column-id="" > User Name</th>
					<th data-column-id="">Email</th>
					<th data-column-id="">Qualification</th>
					<th data-column-id=""  >Edit</th>
					<th data-column-id="commands" data-formatter="commands" data-sortable="false" >Delete</th>

					
                    
					
				</tr>
				<?php 

				while ($user=mysql_fetch_assoc($records)) {
					echo "<tr>";
                    echo "<td>".$user['id']."</td>";
                    echo "<td><a href=userinfo.php?id=".$user['id'].">".$user['user_name']."</a></td>";
                    echo "<td>".$user['email']."</td>";
                    echo "<td>".$user['qualification']."</td>";
                    echo "<td><a href=edit.php?id=".$user['id'].">Edit</a></td>";
                    echo "<td><a href=delete.php?id=".$user['id'].">Delete</a></td>";



                    ?>


                   <!--  <td style="text-align: center">
                    <div class="btn-toolbar">
                        <div class="btn-group">


                            
             <a href="edit.php"> <input type="button" name="edit" value="edit" id="<?php //echo" ".$user['id']." "?>" class="btn-primary"> </a></a> -->
            
           <!--  <td>
            <a class="btn btn-xs btn-default command-delete" href=delete.php?id=".$user[id]." id="<?php //echo" ".$user['id']." "?>" data-toggle="modal"><i class="icon-trash icon-white"></i> Delete</a>
            </td> -->

                   <?php

                   

					echo "</tr>";
				}


				?>
			</thead>
		</table>
    </div>
      </div>
    </div>
















    