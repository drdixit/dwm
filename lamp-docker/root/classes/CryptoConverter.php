<?php

class Converter {}

interface CanConvert
{
    public function convert(float $value);
}

class CryptoConverter extends Converter
{
    //properties: it can be public private and procated
    //public string $currencyCode;
    //function __construct(string $currencyCode)
    //{
    //   $this->currencyCode = $currencyCode;
    //}
    //this is new or you can directly do like this
    function __construct(public string $currencyCode) {}

    //methods
    public function convert(float $value = 1): float|bool
    {
        $code = $this->currencyCode;
        $url = "https://cex.io/api/ticker/$code/USD";
        $json = file_get_contents($url);
        if ($json != false) {
            $data = json_decode($json);
            $last = $data->last;
            return $value * $last;
        } else {
            return false;
        }
    }
}

//both are the same thing
//$newObject = new CryptoConverter("BTC");
//$newObject = new CryptoConverter(currencyCode: "BTC");
