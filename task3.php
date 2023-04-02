<?php
$str = "Hello";
echo md5($str)."<br>";
$str = "Hello world!";
echo chunk_split($str,2,".")."<br>";
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."<br>";
?>