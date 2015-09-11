<?php
 
$articleURL = $_GET["article"];
$soundURL = $_GET["sound"];

$data = file_get_contents($articleURL);
//echo $data;
$parts = parse_url($soundURL);
parse_str($parts['query'], $query);
$url = $query["v"];

$a = 'https://www.youtube.com/embed/'.$url."?autoplay=1#t=0";
echo "<iframe width='1' height='1' src='$a' frameborder='0' allowfullscreen></iframe>";
echo $data;
?>
