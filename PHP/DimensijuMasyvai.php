<?php


// $array - Visi indeksai
// $array_key - 


$arrays = [
    0 => ['Arnas', 'Alytus', '2001'],  //Pirmas indeksas Masyvo
    1 => ['Jokubas', 'Kaunas', '2012'], //Antras indeksas Masyvo
    2 => ['Jotautas', 'Marijampole', '2020'] //Trecias indeksas Masyvo
];

foreach ($arrays as $array_key => $array) { // Takes the $array numbers (e. g.  0 1 2 .. )
    echo 'Array index: ' . $array_key . '<br/>'; // Prints out those numbers (e. g. Array Index: 0)
    foreach ($array as $key => $value) { // $key isvedami kaip skaiciai index (pvz. Index: 0; Index: 1;) // $value isvedami duomenys kas masyve parasyta (pvz. Arnas, Alytus, 2001)
        echo 'index: ' . $key . ' value: ' . $value . '<br/>'; // Isvedamas KEY kaip index, ir insvedama VALUE kaip masyvo vidiniai elementai   
    }
}
