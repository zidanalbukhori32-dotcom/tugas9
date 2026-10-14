<?php
echo "<h3>Latihan Prediksi Output</h3>";

// Soal 1
$a = 5;
$b = 3;
echo "Soal 1: ";
echo $a + $b;
echo "<br>";

// Soal 2
$a = 10;
$b = "10";
echo "Soal 2: ";
var_dump($a == $b);
echo "<br>";

// Soal 3
$a = 10;
$b = "10";
echo "Soal 3: ";
var_dump($a === $b);
echo "<br>";

// Soal 4
$x = 7;
$x++;
echo "Soal 4: ";
echo $x;
echo "<br>";

// Soal 5
$x = 20;
$x -= 5;
echo "Soal 5: ";
echo $x;

echo "<hr>";
echo "<h3>Debugging - Perbaikan Error</h3>";

// Soal Debugging 1
$nama = "AHMAD ZIDAN AL BUKHORI";
echo "Debugging 1 - Nama: " . $nama . "<br>";

// Soal Debugging 2
$a = 10;
$b = 5;
echo "Debugging 2 - Hasil Aritmatika: " . ($a + $b) . "<br>";

// Soal Debugging 3
$umur = 18;
$ktp = true;
if ($umur >= 17 && $ktp) {
    echo "Debugging 3 - Status: Boleh";
}
?>
