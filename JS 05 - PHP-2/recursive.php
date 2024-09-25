<?php
function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";
    
    // Melakukan perulangan dari 1 hingga 25
    for ($i = 1; $i <= 25; $i++) {
        echo "Angka ke-{$i} <br>";
    }
    
    // Memanggil diri sendiri selama $indeks < $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);   
    }
}

// Memanggil fungsi dengan argumen 20
tampilkanAngka(20); 
?>