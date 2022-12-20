<?php


$morpion = array (array ("X", "O", "O"), 
                  array("X", "O", "X"),
                  array("X", "X", "O"));

foreach ($morpion as $ligne){
    foreach($ligne as $case){

        echo $case;
        
    }
    
    // echo $ligne[0].$ligne[1].$ligne[2];
    echo "<br>";

}


function morpion($j1,$j2){

    if      ($j1 === $j2) {
        return "égalite";
}
    if      ($j1==="feuille" AND $j2==="pierre" OR 
             $j1==="pierre" AND $j2==="ciseau" OR 
             $j1==="ciseau" AND $j2==="feuille"){
        return "joueur 1 a gagné";
             }
    else{
        return "joueur 2 a gagné";
}}

echo morpion("pierre", "feuille");




//print_r($morpion);

//echo $morpion [0][0]. " ". $morpion [0][1]. " ". $morpion [0][0]. "<br>". $morpion [1][1]. " ". $morpion [2][1]. " ". $morpion [1][2];

?>