<?php

    $menu = [
        [
        "namaDosen" => "Aceng Fikri",
        "namaMahasiswa" => "Abdul",
        "mataKuliah" => [
            [
                "nama" => "Fisika",
            ],
            [
                "nama" => "Kimia",
            ],
            [
                "nama" => "Biologi",
            ],
        
        ],

        "hobi" => [
            [
                "nama" => "Mancing",
            ],
            [
                "nama" => "Main Game",
            ],
        ],
    ],
    ];

    foreach ($menu as $data) {
        echo "Nama Dosen : " . $data['namaDosen'] . "<br>";
        echo "Nama Mahasiswa : " . $data['namaMahasiswa'] . "<br>";
        echo "<ul>";
        foreach ($data['matkul']) {
            echo "<li>" . $data['namaKuliah'] . "</li>";

            echo "<ol>";
            foreach ($data['hobi']) {
                echo "<li>" . $data['nama'] . "</li>";
            }
            echo "</ol>";
        }
        echo "</ul>";
    }

               
?>