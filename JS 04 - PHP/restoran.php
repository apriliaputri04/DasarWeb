<?php
$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Persentase kursi yang masih kosong di restoran adalah: " . number_format($persentaseKosong, 2) . "%<br>";
?>