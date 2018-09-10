<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en'>
<head>
<title>Part 2 Calendar</title>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link rel='stylesheet' type='text/css' href='calendar.css'></link>
</head>
<body>
<div class="container">
<h1>PART 2<br/> Calendar Page
<?php date_default_timezone_set("America/New_York"); echo date("M-d-Y h:i:s A"); ?></h1>
<table id="event_table">
	<tr class="table_hdr">
		<td id="hr_tble">Hours</td><td>Person1</td><td>Person2</td><td>Person3</td>
	</tr>
<?php
	date_default_timezone_set("America/New_York");
	$hours_to_show=12;
	$hourCounter=0;
	$counter = 0;
	$a=true;
	$functionDay=date("D", strtotime('+'.$counter.' days'));
function get_hour_string($timestamp){
		$timeStr="";
		if($timestamp>=12&&$timestamp<=23){
			$timeStr.=$timestamp-12;
			$timeStr.=" p.m.";
		}elseif($timestamp==0){
			$timeStr.=12;
			$timeStr.=" a.m.";
		}else{
		$timeStr.=$timestamp;
		$timeStr.=" a.m.";
		}
		return $timeStr;
	}

	?>
<?php
$hours_to_show=12;
	for($i=1;$i<=$hours_to_show;$i++)
		{
		if($a){
			echo "<tr class='even_row'>";
		}else{
			echo "<tr class='odd_row'>";
		}
		echo "<td class='hr_tble'>".get_hour_string(date("G", strtotime('+'.$hourCounter.' hours')))."</td>";
		echo "<td class='hr_tble' </td>";
		echo "<td class='hr_tble' </td>";
		echo "<td class='hr_tble' </td>";
		echo "</tr>";
		$hourCounter++;
		$a=!$a;
	}

	date_default_timezone_set("America/New_York");
?>
</table>
</div>

</body>
</html>
