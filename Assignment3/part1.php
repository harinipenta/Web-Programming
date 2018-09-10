<!DOCTYPE html>
<html>
<head>
<title>charlie ate my lunch</title>
</head>
<body>
<?php
function isbitten()
{
	
     $x=rand(1,100);
	 echo $x;
	 if($x>50)
	 {
      echo "Charlie ate my lunch!";
     }
    else
    {
	echo "Charlie did not eat my lunch!";
    }
}
isbitten();
?>
</body>
</html>