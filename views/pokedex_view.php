<?php

include("././controllers/pokedex_controller.php");

echo "<h2>HOLA POKE USERS</h2>";

echo "<h3>Habilidades</h3>";
  
foreach ($json->abilities as $ab) {
    echo $ab->ability->name."<br>";
  }
  
echo "<h2>TIPO</h2>";

echo $pokeName;
echo "<h2>FOTOS</h2>";
echo '<img src="'.$pokeSpriteFront.'"width="200">'; 
echo '<img src="'.$pokeSpriteBack.'"width="200">';

?>