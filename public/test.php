<?php
use GuzzleHttp\Client;
require_once '../vendor/autoload.php';
$client = new GuzzleHttp\Client();
$res = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters");
$d=json_decode($res->getBody());

echo "<pre>";
var_dump($d);
echo "</pre>";
?>