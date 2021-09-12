<?php
  $json = '{
      "Instructions": "delete everything in this object and make your own JSON object using different data.",
      "Title": "The Graduate",
      "Year": "1967",
      "Rated": "Approved",
      "Released": "22 Dec 1967",
      "Runtime": "106 min",
      "Genre": [
        "Comedy",
        "Drama",
        "Romance"
      ],
      "Director": "Mike Nichols",
      "Writers": [
        "Calder Willingham (screenplay)",
        "Buck Henry (screenplay)",
        "Charles Webb (based on the novel by)"
      ],
      "Actors": [
        "Anne Bancroft",
        "Dustin Hoffman",
        "Katharine Ross",
        "William Daniels"
      ],
      "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party, Mrs. Robinson, the wife of his fathers business partner, has Ben drive her home, which leads to an affair between the two. The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinsons daughter.",
      "Language": "English",
      "Country": "USA",
      "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
      "Poster": "https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg",
      "imdbRating": "8.1",
      "imdbVotes": "183,131",
      "imdbID": "tt0061722"
    }';

  $movie = json_decode($json);
  echo "<center>Data Film</center> <br>";
  echo "<b><center>" .$movie->Title. "</center></b> <br>";
  echo "<center><img src=" .$movie->Poster. "></center>";
  echo "<center>" .$movie->Plot. "</center> <br>";
  // echo "<table>";
  // echo "<tr>";
  // echo "<th> <b>Tahun Rilis</b> : </th>";
  // echo "<td>" .$movie->Year. "</td>";
  // echo "</tr>";
  echo "<b>Tahun Rilis</b> : " .$movie->Year. "<br>";
  // echo "<tr>";
  // echo "<th> <b>Tanggal Released</b> : </th>";
  // echo "<td>" .$movie->Year. "</td>";
  // echo "</tr>";
  echo "<b>Tanggal Rilis</b> : " .$movie->Released. "<br>";
  echo "<b>Durasi Film</b> : " .$movie->Runtime. "<br>";
  echo "<b>Genre</b> : " .implode(", " , $movie->Genre). "<br>";
  echo "<b>Director</b> : " .$movie->Director. "<br>";

  echo "<b>Penulis </b>: ";
  echo "<ul>";
  foreach ($movie->Writers as $Writers) {
    echo "<li>" .$Writers. "</li>";
  }
  echo "</ul>";

  echo "<b>Pemeran </b> ";
  echo "<ul>";
  foreach ($movie->Actors as $Actors) {
    echo "<li>" .$Actors. "</li>";
  }
  echo "</ul>";

  echo "<b>Bahasa</b> : " .$movie->Language. "<br>";
  echo "<b>Negara</b> : " .$movie->Country. "<br>";
  echo "<b>Penghargaan</b> : " .$movie->Awards. "<br>";
  echo "<b>Nilai</b> : " .$movie->imdbRating. "<br>";
  echo "<b>Vote</b> : " .$movie->imdbVotes. " Orang <br>";
  echo "<b>imdbID</b> : " .$movie->imdbID. " Orang <br>";
  
  //echo "</table>";



?>