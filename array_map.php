
// array_map problem 2
<?php
$inventory = array( array("name" => "bat" , "in stock" => 5 ,"per item cost" => 3.50),
	     array("name" => "ball", "in stock" => 4 ,"per item cost" => 0.50),
	     array("name" => "base", "in stock" => 3 ,"per item cost" => 5.00),
	     array("name" => "umpire", "in stock" => 2 ,"per item cost" => 10000.0),	
	     array("name" => "player", "in stock" => 4 ,"per item cost" => 5000.0) );

//$sumResult = array_map("sum", $inventory[0] $inventory[1], $inventory[2]);

$i = 0;
array_product(array_map(function($row) { 
        for($i=0;$i<1;$i++)
        {

     echo $row['name']."\n";
     echo $row['in stock'] * $row['per item cost']  ."<br/>";
        }
    }, $inventory));
   


?>