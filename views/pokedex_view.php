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
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Source+Sans+Pro&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./views/css/normalize.css">
    <link rel="stylesheet" href="./views/css/style.css">
</head>

<body>
    <header>
        <span class="container">
            <h1>Pokemon - pokedex Api</h1>
            <p>Connected to: <a href="https://pokeapi.co/" target="_blank"><img class="img-header"
                        src="./views/img/pokeapi.png" alt="pokeapi-logo"></a></p>
        </span>
    </header>
    <section id="search-bar" class="container">
        <input id="search" type="text" placeholder="Type in pokémon name"></input>
        <input id="btn-search" type="button"><img src=""></input>
    </section>
    <section id="card" class="container">
        <div id="title">
            <h2>Pikachu - no.25</h2>
        </div>
        <div id="card-container">
            <span id="img-container">
                <?php
            echo 
              '<img src="'.$json->sprites->front_default.'"width="200">
              <img src="'.$json->sprites->back_default.'"width="200">'; 
          ?>
            </span>
            <span id="data-container">
                <span id="data-container-col1">
                    <span id="Stats">
                        <h3>Stats</h3>
                        <?php
                        /*Si se puede hacer que estos stats sean p mejor */
                foreach ($json->stats as $st) {
                  echo $st->stat->name.': ';
                  echo $st->base_stat.'<br>';
                }
              ?>
                    </span>
                </span>
                <span id="data-container-col2">
                    <span id="skills">
                        <h3>Skills</h3>
                        <?php 
              foreach ($json->abilities as $ab) {
                echo $ab->ability->name."<br>";
              }
              ?>
                    </span>

                </span>
                <span id="data-container-col3">
                    <span id="type">
                        <h3>Type</h3>
                        <?php
                echo $json->types[0]->type->name;
              ?>
                    </span>
                </span>
            </span>
        </div>
    </section>
    <footer>
        <p>&lt;/&gt; with <span>&#10084;</span> by <a href="https://matelab.com.ar/" target="_blank">MateLab</a> <a
                href="https://github.com/matelab" target="_blank"><img src="./views/img/GitHub-Mark.png"
                    alt="github"></a></p>
    </footer>
</body>

</html>