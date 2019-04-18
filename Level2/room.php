<?php

use GuzzleHttp\Client;

require_once '../vendor/autoload.php';
$client = new GuzzleHttp\Client();
$res = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/random");
$d=json_decode($res->getBody());
$result = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/random");
$c=json_decode($result->getBody());
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
            Arriver a la pharmacie
        </div>
    </div>
    <div class="card bg-dark text-white border 1px mt-4 offset-2" style="width: 60em">
        <div class="card-body">
            <p>Tu vois <?php echo $d->name ?> qui te fait des grand signes de la main,<?php echo $c->name ?> qui tien la pharmacie et qui te propose de la codéine ou des doliprane. </p>
        </div>
    </div>
    <div class="card bg-dark text-white border 1px mt-4 offset-2" style="width: 60em">
        <div class="card-body">
            <button type="button" class="btn btn-outline-success mt-3 offset-4" style="width: 18em"><a href="roomA.php" ><?php echo $d->name?></a></button>
            <button type="button" class="btn btn-outline-success mt-3 offset-4" style="width: 18em"><a href="roomB.php" >Tu prend un doliprane</a></button>
            <button type="button" class="btn btn-outline-success mt-3 offset-4" style="width: 18em"><a href="roomC.php" >Tu prend de la codéine</a></button>
        </div>
    </div>
</div>