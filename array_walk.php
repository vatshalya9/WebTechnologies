//sum the values of in stock column using array_walk function

<?php
$inventory =array( array("name" => "bat" , "in stock" => 5 ,"per item cost" => 3.50),
	     array("name" => "ball", "in stock" => 4 ,"per item cost" => 0.50),
	     array("name" => "base", "in stock" => 3 ,"per item cost" => 5.00),
	     array("name" => "umpire", "in stock" => 2 ,"per item cost" => 10000.0),	
	     array("name" => "player", "in stock" => 4 ,"per item cost" => 5000.0) );
echo "The total sum of the in stock values is : ";
function array_sum_values(array $input, $key) {
   $sum = 0;
   array_walk($input, function($item, $index, $params) {
         if (!empty($item[$params[1]]))
            $params[0] += $item[$params[1]];
      }, array(&$sum, $key)
   );
   return $sum;
}

var_dump(array_sum_values($inventory, 'in stock'));
?>










