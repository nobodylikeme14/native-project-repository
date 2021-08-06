<?php
/*Nama    : Muhammad Al Fauzy
  Kelas   : XII - RPL
  LATIHAN 1
*/

$text = "Muhammad al fauzy";

echo "<p>Input Text : ".$text."</p>
      Jawaban : <br>";
echo "Output Terbalik : ".strrev($text)."<br>";
echo "Output Kapital : ".strtoupper($text)."<br>";
echo "Output Setiap Kata Huruf Kapital : ".ucwords($text)."<br>";
echo "Output Huruf Kecil : ".strtolower($text);
?>
