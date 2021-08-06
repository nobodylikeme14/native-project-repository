<?php
/*Nama    : Muhammad Al Fauzy
  Kelas   : XII - RPL
  LATIHAN 6
*/
$text = "Halo guys";
$pola = '/Halo/i';

echo "<p>Input Text : {$text}</p>";
echo "Jawaban : <br>";
echo "Output : ".preg_replace($pola, 'Hola', $text);
?>
