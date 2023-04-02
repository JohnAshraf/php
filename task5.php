<?php
$arr=array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
print_r ($arr);

echo "<br><br><b>ascending order sort by value:</b> <br>";
asort($arr);
foreach($arr as $key => $value ){
    print_r("$key => $value </br>");
  }

echo "<br><b>ascending order sort by key: </b><br>";
ksort($arr);
foreach($arr as $key => $value ){
    print_r("$key => $value </br>");
  }

echo "<br><b>descending order sort by value: </b><br>";
arsort($arr);
  foreach($arr as $key => $value ){
    print_r("$key => $value </br>");
  }

echo "<br><b>descending order sort by key:</b> <br>";
krsort($arr);
  foreach($arr as $key => $value ){
    print_r("$key => $value </br>");
  }

?>