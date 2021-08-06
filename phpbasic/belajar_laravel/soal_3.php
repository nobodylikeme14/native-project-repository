<?php

$input = "muhammadalfauzy@gmail.com";
echo "Email : ".$input."<br>";
$emailname = strstr($input, '@', true);
echo "Output Nama Email : ".$emailname."<br>";
$lastchar = substr($input, -3);
echo "Output 3 Karakter Terakhir : ".$lastchar."<br>";

?>