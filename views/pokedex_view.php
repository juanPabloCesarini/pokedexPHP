
<?php
include("././controllers/pokedex_controller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemon Api</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./img/favicon.ico">
  <link rel="stylesheet" href="./views/css/normalize.css">
  <link rel="stylesheet" href="./views/css/style.css">
</head>
<body>
<header>
  <span>
    <h1>Pokemon - pokedex Api</h1>
    <p>Connected to: <a href="https://pokeapi.co/" target="_blank"><img class="img-header" src="./img/pokeapi.png" alt="pokeapi-logo"></a></p>
  </span>
</header>
<section class="search-bar">
    <input type="text" placeholder="Type in pokémon name"></input>
</section>
<h2>Habilidades</h2>
<?php 
foreach ($json->abilities as $ab) {
  echo $ab->ability->name."<br>";
}
?> 
<?php
  echo 
  '<div>
    <img src="'.$json->sprites->front_default.'"width="200">
    <img src="'.$json->sprites->back_default.'"width="200">
  </div>'; 
?>
<?php
echo "<h2>Type</h2>";

echo $json->types[0]->type->name;

?>
</body>
</html>