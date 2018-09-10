<!DOCTYPE html>
<html>
<head>
<title>Restaurants</title>
</head>
<body>
<?php
    $myArray =array(
        array("Restaurant" => "Chama Gaucha","AvgCosts" => "$40.50"),
array("Restaurant" => "Aviva by Kameel","AvgCosts" => "$15.00"),
array("Restaurant" => "Bones Restaurantt","AvgCosts" => "$65.00"),
array("Restaurant" => "Umi Sushi Buckhead","AvgCosts" => "$40.50"),
array("Restaurant" => "Fandangles","AvgCosts" => "$30.00"),
array("Restaurant" => "Capital Grille","AvgCosts" => "$60.50"),
array("Restaurant" => "Canoe","AvgCosts" => "$35.50"),
array("Restaurant" => "One Flew South","AvgCosts" => "$21.00"),
array("Restaurant" => "Fox Bros BBQ","AvgCosts" => "$15.00"),
array("Restaurant" => "South City Midtown","AvgCosts" => "$29.00"),


);


       
    ?><table border=3>
  <thead align="left" style="display: table-header-group">
  <tr>
     <th>Restaurants</th>
     <th>Average Cost</th>
    
  </tr>
  </thead>

<tbody>
<?php 
$total = 0;
foreach ($myArray as $rows) :?>

  <tr>
       
        <td> <?php echo $rows['Restaurant']; ?></td>
        <td> <?php echo $rows['AvgCosts']; ?></td>
     
  </tr>

<?php endforeach;?>
</tbody>
</table>

<?php   
    foreach($myArray as $c=>$key) {
        $sort_numcie[] = $key['AvgCosts'];
        $sort_ref[] = $key['Restaurant'];
   
    }

    array_multisort($sort_numcie, SORT_ASC,$sort_ref, SORT_STRING, $myArray);
  
?>     


<table border=3>
  <thead align="left" style="display: table-header-group">
  <tr>
     <th>Restaurants</th>
     <th>Average Cost</th>
    
  </tr>
  </thead>

<tbody>
<?php 
$total = 0;
foreach ($myArray as $rows) :?>

  <tr>
       
        <td> <?php echo $rows['Restaurant']; ?></td>
        <td> <?php echo $rows['AvgCosts']; ?></td>
     
  </tr>

<?php endforeach;?>
</tbody>
</table>
</body>
</html>
