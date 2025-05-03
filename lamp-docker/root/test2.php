<?php

$url = "https://cex.io/api/ticker/BTC/USD";
$json = file_get_contents($url);
if ($json != false) {
    $data = json_decode($json);
    var_dump($data);
    $last = $data->last;
    echo "<h1>" . $last . "</h1>";
}
