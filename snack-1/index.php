<?php 
    $partite = [
        [
            "squadra_di_casa" => "Olimpia Milano",
            "squadra_ospite" => "Cantù",
            "punteggio" =>  "55-60"
        ],
        [
            "squadra_di_casa" => "Torino",
            "squadra_ospite" => "Palermo",
            "punteggio" =>  "45-30"
        ],
        [
            "squadra_di_casa" => "Roma",
            "squadra_ospite" => "Verona",
            "punteggio" =>  "35-10"
        ],
        [
            "squadra_di_casa" => "Padova",
            "squadra_ospite" => "Salerno",
            "punteggio" =>  "25-5"
        ]
    ];

    foreach($partite as $giornata){
        echo $giornata["squadra_di_casa"] . " - " . $giornata["squadra_ospite"] . " | " . $giornata["punteggio"] . "<br/>";
    };
?>