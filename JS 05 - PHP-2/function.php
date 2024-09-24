<?php
function perkenalan($nama, $salam){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>"; // Tulis sesuai nama kalian
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan("Hamdana", "Hallo");

echo "<hr/>"; // Memberikan jarak antar output

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
perkenalan($saya, $ucapanSalam);

?>
