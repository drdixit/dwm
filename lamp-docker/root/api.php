<?php

include "./classes.php";

// Export a JSON to the client
// we are writing http header mannually
// changing this means php can return any type of file
// always call header before anything else or always call header first
// header should be at the top of the output
header("Content-type: application/json");
// cross-headers localhost problem
header("Access-Control-Allow-Origin: *");


//if (!isset($_GET["code"])) {
//    $code = "BTC";
//} else {
//    $code = $_GET["code"];
//}
//or you can do this too
$code = $_GET["code"] ?? "BTC";
//there is also safe call operator
//if we have a object here then call this method oterwise(if null) just continue
//$rateInUSD = $converter?->convert();

$converter = new CryptoConverter($code);
$rateInUSD = $converter->convert();

echo "{\"rate\": $rateInUSD }";
