<!DOCTYPE html>
<html>
<body>
<?php  
function isLeap($year)  
{  
    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
}  
//For testing  
for($year=1991; $year<2017; $year++)  
{  
    If (isLeap($year))  
    {  
        echo "$year :<b> LEAP YEAR</b><br />\n";  
    }  
    else  
    {  
        echo "$year : Not leap year<br />\n";  
    }  
}  
?>  
</body>
</html>
