<?php
 mysql_connect('localhost','root','');

mysql_select_db('harini');

$sql ="DELETE FROM registered_users WHERE id='$_GET[id]'";
if(mysql_query($sql)){
   
    // echo "deleted";

	header("refresh:1; url=disply_records.php");
}else{
	echo "not deleted";
}



?>