<?php
// Bubble Sort program in  php
$numbers = array(12,14,15,15,16,18,19,13,10,1,4,2,2,8,19,2,3,49,58,12,23,45,20,5,6,34,17,9,56);
$n =  count($numbers);
for($c = 0; $c <($n - 1);$c++){
  for($d = 0; $d < ($n - 1); $d++){
      if($numbers[$d] > $numbers[$d+1]) // for decreasing order use <
            {
              $swap = $numbers[$d];
              $numbers[$d] = $numbers[$d+1];
              $numbers[$d+1] = $swap;
            }
    }
}

echo "Sorted list in ascecnding order <br>";

for($c = 0; $c < $n; $c++)
  echo $numbers[$c]." ";
  
  ?>
