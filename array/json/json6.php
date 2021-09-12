<?php

    $menu = [
        [
            // "namaDosen" => "Aceng Fikri",
            "namaMahasiswa" => "Abdul",
            "matkul" => [
                ["nama" => "Fisika",],
                ["nama" => "Matematika",],
                ["nama" => "Biologi",],
            ],
                
            "hobi" => [
                ["nama" => "Mancing",],
                ["nama" => "Main Bola",],
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
                ["nama" => "Fisika",],
                ["nama" => "Matematika",],
                ["nama" => "Biologi",],
            ],
                
            "hobi" => [
                ["nama" => "Mancing",],
                ["nama" => "Main Bola",],
            ],
            "namaDosen" => "Aceng Fikri",
        ],

        [
            "namaMahasiswa" => "Acep",
            "matkul" => [
                ["nama" => "Fisika",],
                ["nama" => "Matematika",],
                ["nama" => "Biologi",],
            ],
                
            "hobi" => [
                ["nama" => "Mancing",],
                ["nama" => "Main Bola",],
            ],
            "namaDosen" => "Aceng Fikri",
        ],
        [
            "namaMahasiswa" => "Aceng",
            "matkul" => [
                ["nama" => "Fisika",],
                ["nama" => "Matematika",],
                ["nama" => "Biologi",],
            ],
                
            "hobi" => [
                ["nama" => "Mancing",],
                ["nama" => "Main Bola",],
            ],
            "namaDosen" => "Ujang Betok",
        ],
        [
            "namaMahasiswa" => "Mahmud",
            "matkul" => [
                ["nama" => "Fisika",],
                ["nama" => "Matematika",],
                ["nama" => "Biologi",],
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
    
    $data = json_encode($menu);
    echo $data;

?>