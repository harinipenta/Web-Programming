<!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="assignment4.css">
<title>
</title>
</head>
<body>
<div class="container">
<?php
            date_default_timezone_set('America/New_York');
			$currentPeriod= null;
        ?>
            <h1>
                <b>Calender</b>
                
            </h1>
            <hr/>
            <h1>
                <?php
                print "<br>";
                print "<b>";
                print "Today is ";
                print "</b>";
                print date('l') . ".";
                print "<br>";
                print "<b>";
                print "Time is ";
                print "</b>";
                print date('g') . ":" . date('i') . " " . $currentPeriod . " " . date('A') . " " . date('T') . ".";
                ?>
            </h1>
            <br>
            <br>
            <table id="event_table">
                <tr>
                    <th class="table_header"><b>Clock Hour</b></th>
                    <th class="table_header"><b>Hours added</b></th>
                </tr>

                <?php
                    addHours();
                ?>
                    <?php
                function addHours(){
                    for($hours_to_add=0; $hours_to_add<=12; $hours_to_add++){
                        $currentHour = date('G');
                        //$currentHour = 18;
                        $currentPeriod = date('A');
                        //$currentPeriod = "PM";
                        $modifiedHour = $currentHour + $hours_to_add;
                        colorRows($hours_to_add);
                        if($currentHour > 12 && $modifiedHour < 24){
                            $modifiedHour -= 12;
                            print $modifiedHour . ":00 " . "PM";
                        }else if($currentHour < 12 && $modifiedHour < 12){
                            print $modifiedHour . ":00 " . "AM";
                        } else if($currentHour <= 12 && $modifiedHour < 24){
                            if($modifiedHour < 12){
                                print $modifiedHour . ":00 " . "AM";
                            }else{
                                if($modifiedHour != 12){
                                    $modifiedHour -= 12;
                                }
                                print $modifiedHour . ":00 " . "PM";
                            }
                        } else if($currentHour > 12 && $modifiedHour > 24){
                            $modifiedHour -= 24;
                            if($modifiedHour == 12){
                                print $modifiedHour . ":00 " . "PM";
                            }else{
                                print $modifiedHour . ":00 " . "AM";
                            }
                        }
                        else{
                            $modifiedHour = $modifiedHour - 24;
                            if($modifiedHour == 12){
                                print $modifiedHour . ":00 " . "PM";
                            }else{
                                print $modifiedHour . ":00 " . "AM";
                            }
                        }
                        print "</td>";
                        print "<td class='hr_td'>";
                        if($hours_to_add == 0){
                            print "+". $hours_to_add . ":00 (hr)";
                        } else{
                            print "+". $hours_to_add . ":00 (hrs)";
                        }
                        print "</td>";
                        print "</tr>";
                    }
                }
                
                function colorRows($value){
                    if($value % 2 == 0){
                        print "<tr class='even_row hr_td'>";
                    } else{
                        print "<tr class='odd_row hr_td'>";
                    }
                    print "<td class='hr_td'>";
                }
                ?>
            </table>
    </div>

    
</body>

</html>
