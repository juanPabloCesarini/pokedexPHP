<?php

include("././controllers/pokedex_controller.php");

echo "<h2>HOLA POKE USERS</h2>";

echo "<h3>Habilidades</h3>";
  
foreach ($json->abilities as $ab) {
    echo $ab->ability->name."<br>";
  }
  
echo "<h2>TIPO</h2>";

echo $json->types[0]->type->name;
echo "<h2>FOTOS</h2>";
echo '<img src="'.$json->sprites->front_default.'"width="200">'; 
echo '<img src="'.$json->sprites->back_default.'"width="200">';

?>