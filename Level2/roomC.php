<?php
require_once '../vendor/autoload.php';
$client = new GuzzleHttp\Client();

$res = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/random");
$d=json_decode($res->getBody());

$result = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/random");
$c=json_decode($result->getBody());

$resulta = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/random");
$b=json_decode($resulta->getBody());
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="template_page.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Level 2</title>
</head>

<body>
<div id="top">

</div>
<hr/>
<div id="bottom">
    <div class="card mt-2 text-center offset-5" style="width: 14em">
        <div class="card-body">
            <h1> Tu a encore trop ABUSER !</h1>

        </div>
    </div>
    <div class="card bg-dark text-white border 1px mt-4 offset-2" style="width: 60em">
        <div class="card-body">
            <select class="custom-select custom-select-lg mb-3">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    <button type="button" class="btn btn-outline-success mt-3 offset-5" style="width: 14em">Valider</button>
</div>