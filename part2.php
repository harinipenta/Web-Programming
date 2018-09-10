<!DOCTYPE html>
<html>
<head>
<title> CheckerBoard</title>
<style>

	table, td{
		
		border-width:1px;
		padding: 1px;
		border: 1px;
		
		}
	.black{
		background-color: black;
		width: 35px;
		height: 35px;
	}
	.red{
		background-color: red;
		width: 35px;
		height: 35px;
	}
</style>
</head>

<body>
	<table>
		<tbody>
			<?php
				for($x=1; $x<=8; $x++){
					echo "<tr>";
					for($y=1; $y<=4; $y++){
						
						if($x % 2 == 0){
							echo '<td class="black"></td>';
							echo '<td class="red"></td>';
						}
						else{
							echo '<td class="red"></td>';
							echo '<td class="black"></td>';
					
					}
					echo "<td></td>";
					}
				echo "</tr>";
				}
?>
</tbody>
</table>


</body>
</html>