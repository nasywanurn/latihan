<?php

$menu = [
    [
        // "namaDosen" => "Aceng Fikri",
        "namaMahasiswa" => "Abdul",
        "matkul" => [
            [
                "nama" => "Fisika",
            ],
            [
                "nama" => "Matematika",
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
                "nama" => "Main Bola",
            ],
        ],
        "namaDosen" => "Aceng Fikri",
        
        // ['namaMahasiswa' => "Ahmad"],
        // ['namaMahasiswa' => "Acep"],
        // ['namaMahasiswa' => "Aceng"],
        // ['namaMahasiswa' => "Mahmud"],
        // ['namaMahasiswa' => "Fikri"],

    ],

    [
        "namaMahasiswa" => "Ahmad",
        "matkul" => [
            [
                "nama" => "Fisika",
            ],
            [
                "nama" => "Matematika",
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
                "nama" => "Main Bola",
            ],
        ],
        "namaDosen" => "Aceng Fikri",
    ],

    [
        "namaMahasiswa" => "Acep",
        "matkul" => [
            [
                "nama" => "Fisika",
            ],
            [
                "nama" => "Matematika",
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
                "nama" => "Main Bola",
            ],
        ],
        "namaDosen" => "Aceng Fikri",
    ],
    [
        "namaMahasiswa" => "Aceng",
        "matkul" => [
            [
                "nama" => "Fisika",
            ],
            [
                "nama" => "Matematika",
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
                "nama" => "Main Bola",
            ],
        ],
        "namaDosen" => "Ujang Betok",
    ],
    [
        "namaMahasiswa" => "Mahmud",
        "matkul" => [
            [
                "nama" => "Fisika",
            ],
            [
                "nama" => "Matematika",
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
                "nama" => "Main Bola",
            ],
        ],
        "namaDosen" => "Ujang Betok",
    ],
    [
        "namaMahasiswa" => "Abdul",
        "matkul" => [
            [
                "nama" => "Fisika",
            ],
            [
                "nama" => "Matematika",
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
                "nama" => "Main Bola",
            ],
        ],
        "namaDosen" => "Ujang Betok",
    ],

];
    
    $no=1;

    foreach ($menu as $data) {
        echo "Nama Dosen : " . $data['namaDosen'] . "<br>";
        echo "Daftar Mahasiswa : <br>";
        echo "<ul>";
        echo "<li> Data Ke-".$no++ ."<br>";
        echo "Nama Mahasiswa : " .$data['namaMahasiswa'] . "</li>";
        echo "</ul>";
        echo "<ul>";
        echo "Daftar Mata Kuliah : ";
        echo "<ol>";
        foreach ($data['matkul'] as $matkul) {
            echo "<li>". $matkul['nama']."</li>";
        }
        echo "<ol>";
        echo "</ul>";
        echo "<ul>";
        echo " Daftar Hobi : ";
        echo "<ol>";
        foreach ($data['hobi'] as $hobi) {
            echo "<li>" . $hobi['nama'] . "</li>";
        }
        echo "<ol>";
        echo "</ul>";
    }

?>