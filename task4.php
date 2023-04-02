<?php
 $numbers = [12, 45, 10, 25];
print_r ($numbers);
print_r("</br> AVERAGE is: ".array_sum($numbers)/count($numbers));
print_r("</br> SUM is: ".array_sum($numbers)."</br>");
echo ("REVERSE:");
rsort($numbers);
$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++)
  {
  echo $numbers[$x]." ";
  }
 ?>