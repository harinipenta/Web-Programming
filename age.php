<!DOCTYPE html>
<html>
    <head>
	<style>
	.two{
		text-align:center;
		padding:100px;
	}
	.one{
		
		color: green;
	}
	body{
		background-color: lightpink;
	}
		
	
	</style>
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <title>Handle Form 1</title>
    </head>
    <body>
	<div class="two">
        <?php
        $title = $_POST['title'];
        $forename = $_POST['forename'];
        $surname = $_POST['surname'];
        $address = $_POST['address'];
        $birthyear = $_POST['birthyear'];
        $thisyear = date("Y");
        $age = $thisyear - $birthyear;
		
        echo "<h2 class='one'> Hello , $title $forename $surname  of  $address</h2><br/>" ;
        echo "<h2 class='one'> You are  $age  this year</h2>";
        ?></div>
		
    </body>
</html>