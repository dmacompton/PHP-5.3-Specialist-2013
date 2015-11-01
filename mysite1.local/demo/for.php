<?php 
for ($i = 1; $i <= 50; $i+=2) { 
	echo "$i<br/>";
}
echo "<br/>";
$var = "HELLO";
$i = 0;
$len = strlen($var);
while ($i < $len) {
	echo $var{$i}."<br/>";
	$i++;
}
 ?>