<!DOCTYPE html>
<html>
<head>
<title>checker</title>
</head>
<body>
<table width="300px" cellspacing="1px" cellpadding="1px" border="1px">
<?php
for($row=1;$row<=10;$row++)  
 {  
              echo "<tr>";  
              for($col=1;$col<=10;$col++)  
              {
			    $total=$row+$col;  
                if($total%2==0)  
                {  
                  echo "<td height=35px width=35px bgcolor=red></td>";  
                }  
                else  
                {  
                  echo "<td height=35px width=35px bgcolor=black></td>";  
                }  
              }  
              echo "</tr>";  
 }  
              ?>  
      </table>  
      </body>  
      </html>  
