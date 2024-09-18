<?php
// Data siswa dan nilai mereka
$daftarNilai = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90,
];

$totalNilai = 0;
$jumlahSiswa = count($daftarNilai);

foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai;
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Daftar siswa yang mendapat nilai di atas rata-rata:<br>";

foreach ($daftarNilai as $nama => $nilai) {
    if ($nilai > $rataRata) {
        echo "Nama: $nama, Nilai: $nilai<br>";
    }
}
?>
