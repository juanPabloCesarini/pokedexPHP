<?php
/* Acá debería leer el input con la barra de busqueda en cada caracter que se tipée
creo que debería consultar la api a la vez para hacer el autocompletado */
$pokemon = "pikachu";
$url = "https://pokeapi.co/api/v2/pokemon/".$pokemon;
$api = curl_init($url);

?>