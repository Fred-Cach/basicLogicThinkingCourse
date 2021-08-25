<?php
function placeRecommendation($condition = '', $question = ''){
    $weather = array("Bogotá" => "cold", "Montería" => "hot", "Medellín" => "mild");
    $ubication = array("Guajira" => "north", "Leticia" => "south", "Santander" => "east", "Antioquia" => "west");
    $tourism = array("Santa Marta" => "sea", "VIllavicencio" => "plains", "Riohacha" => "desert", "Quindío" => "valley");

    switch($condition) {
        case "weather":
            // echo array_search($question, $weather);
            $search = $weather;
        break;
        case "ubication":
            // echo array_search($question, $ubication);
            $search = $ubication;
        break;
        case "tourism":
            // echo array_search($question, $tourism);
            $search = $tourism;
        break;
        default:
        echo "Welcome to Colombia!";
    }
    echo "The perfect place for you is ".array_search($question, $search);
}
placeRecommendation("ubication", "south");