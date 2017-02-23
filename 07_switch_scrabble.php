<?php

$woord = "quotering";
$punten = 0;

// gebruik een switch-case-statement binnen een for-loop om
// te itereren over een woord en de Scrabble-punten ervan te berekenen

// Q 10 punten
// U 4 punten
// O 1 punt
// T 2 punten
// E 1 punt
// R 2 punten
// I 1 punt
// N 1 punt

for($i = 0; $i < strlen($woord); $i++) {  
    echo $woord[$i]; 
    switch(strtoupper($woord[$i])) {
        case "Q":
            $punten += 10;
            break;
        case "U":
            $punten += 4;
            break;
        case "T":
        case "R":
            $punten += 2;
            break;
        case "I":
        case "N":
        case "E":
        case "O":
            $punten += 1;
            break;
        case "G":
            $punten += 3;
            break;  
        
    }
    
}
echo "<br> $punten <br>";

?>
