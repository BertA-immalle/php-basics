<?php

// Maak een Array met 3 namen van medeleerlingen.

$leerlingen = array("Thom", "Kathleen", "Jelle");


// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.

$for = "dit is een for-loop <br>";
echo $for;
for ($i=0; $i < array_count_values($leerlingen); $i++) { 
    echo $i;
}

// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.

$foreach = "dit is een foreach-loop <br>";
echo $foreach;

foreach ($leerlingen as $key => $value) {
    echo "$value <br>";
}

$naam = "Willy";

// Itereer met een for-loop over de variable $naam alsof het een array was.
$naam_over_array = "dit is een for-loop over een gewone standaard variable <br>";
echo $naam_over_array; 
for ($i=0; $i < count($naam); $i++) { 
    # code ...
}

?>
