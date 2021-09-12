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
                    "nama" => "Main Game",
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
                    "nama" => "Membaca",
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
                    "nama" => "Main Bola",
                ],
                [
                    "nama" => "Main Game",
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
    

    echo "<table border=1>";
        echo "<tr>";
            echo "<th>No</th>";
            echo "<th>Nama Mahasiswa</th>";
            echo "<th>Nama Dosen</th>";
            echo "<th>Mata Kuliah</th>";
            echo "<th>Hobi</th>";
        echo "</tr>";
    
        $no=1;

        foreach($menu as $data){ 
            echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $data['namaMahasiswa'] . "</td>";
                echo "<td>" . $data['namaDosen'] . "</td>";
                echo "<td>";
                echo "<ul>";
                        
                    foreach($data['matkul'] as $matkul){
                        echo "<li>" .$matkul['nama'] . "</li>";
                    }
                
                    echo "</ul>";
                    echo "</td>";
                    echo "<td>";
                    echo "<ul>";
                    
                    foreach($data['hobi'] as $hobi){
                        echo "<li>" . $hobi['nama'] . "</li>";
                    }
                    
                    echo "</ul>";
                    echo "</td>";
                    echo "</tr>";
        } 
    echo "</table>";

?>