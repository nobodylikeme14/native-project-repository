<?php
/*Nama    : Muhammad Al Fauzy
  Kelas   : XII - RPL
  LATIHAN 4
*/
$text = "241221";
$replacement = ':';
$text1 = substr_replace($text, $replacement, 2, 0);
$output = substr_replace($text1, $replacement, 5, 0);
echo "<p>Input Text : {$text}</p>
      Jawaban : <br>";
echo "Output : ".$output;
?>
