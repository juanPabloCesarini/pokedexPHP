<?php
/* Acá debería leer el input con la barra de busqueda en cada caracter que se tipée
creo que debería consultar la api a la vez para hacer el autocompletado */
$pokemon = "pikachu";
$url = "https://pokeapi.co/api/v2/pokemon/".$pokemon;
$api = curl_init($url);

// Controller makes a curl operation so
// now we make the JSON values into variables

$pokeName = $json->types[0]->type->name;
$pokeType = $json->types[1]->type->name;
$pokeSpriteFront = $json->sprites->front_default;
$pokeSpriteBack = $json->sprites->back_default;

?>