<?php
$hargaAwal = 120000;
$diskonPersen = 20;
$batasDiskon = 100000;

if ($hargaAwal > $batasDiskon) {
    $nilaiDiskon = ($diskonPersen / 100) * $hargaAwal;
    $hargaAkhir = $hargaAwal - $nilaiDiskon;
} else {
    $hargaAkhir = $hargaAwal;
}

echo "Harga produk sebelum diskon: Rp " . number_format($hargaAwal, 0, ',', '.') . "<br>";
echo "Diskon: $diskonPersen%<br>";
echo "Harga setelah diskon: Rp " . number_format($hargaAkhir, 0, ',', '.');
?>