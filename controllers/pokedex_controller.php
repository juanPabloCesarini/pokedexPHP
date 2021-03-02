<?php

include("././models/pokedex_model.php");

curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($api);
curl_close($api);
$json = json_decode($response);

?>
