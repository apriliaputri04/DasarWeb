<?php
$skorPemain = 300;
$batasHadiah = 500;
$hadiahTambahan = ($skorPemain > $batasHadiah) ? 'YA' : 'TIDAK';

echo "Total skor pemain adalah: $skorPemain<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>