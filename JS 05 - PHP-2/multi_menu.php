<?
$menu = [
    ["nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            ["nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ] 
];

function tampilkanMenuBertingkat(array $menu, $level = 1) {
    $tagList = ($level % 2 == 1) ? 'ul' : 'ol'; // Alternatif antara ul dan ol
    echo "<$tagList>";

    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu'], $level + 1);
        }
        echo "</li>";
    }

    echo "</$tagList>";
}

tampilkanMenuBertingkat($menu);
?>