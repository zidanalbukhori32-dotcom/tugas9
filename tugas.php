<?php
// Data Barang
$namaBarang = "Buku";
$harga = 5000;
$jumlah = 7;

// Menghitung Total Harga
$total = $harga * $jumlah;

// Menghitung Diskon (10% jika total > Rp30.000)
$diskon = ($total > 30000) ? $total * 0.10 : 0;

// Menghitung Total Bayar
$bayar = $total - $diskon;

// Target Output
echo "Nama Barang &nbsp;&nbsp;: &nbsp;" . $namaBarang . "<br>";
echo "Harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;" . $harga . "<br>";
echo "Jumlah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;" . $jumlah . "<br>";
echo "Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;" . $total . "<br>";
echo "Diskon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;" . $diskon . "<br>";
echo "Bayar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;" . $bayar . "<br>";
?>
