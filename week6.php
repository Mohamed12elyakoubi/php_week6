<?php
//Opdracht 1
// $time = date("H:i");

// if ($time < "12:00") {
//     echo "Goedemorgen";
// } elseif ($time < "18:00") {
//     echo "Goedemiddag";
// } else {
//     echo "Goedenavond";
// }

//Opdracht 2

// function gemiddeldebrekenen($x , $y){
//     $gemiddelde = ($x + $y) / 2;
//     echo "Het gemiddelde is: " . $gemiddelde;
// }
// gemiddeldebrekenen(33,2);

//Opdracht 3

// function hoeveeldagennog(){
//     $datumvandaag = date_create();
//     $eindejaar = date_create(date('Y') . '-12-31');
//     $verschil = date_diff($datumvandaag, $eindejaar);
//     $dagennog = $verschil->format('%a');
    
//     echo "Aantal dagen tot het einde van het jaar: " . $dagennog;
// }
// hoeveeldagennog();

//Opdracht 4
function berekentotaleLengte($x) {
    $totaleLengte = 0;
    foreach ($x as $xy) {
        $totaleLengte += strlen($xy);
    }
    return $totaleLengte;
}

$array = array("marhaba", "mohamed", "El Yakoubi");
$resultaat = berekenTotaleLengte($array);
echo "Totale lengte van de strings: " . $resultaat;

?>
