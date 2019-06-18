<?php

use GuzzleHttp\Client;

require_once '../vendor/autoload.php';
$client = new GuzzleHttp\Client();

$res = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/5cac51240d488f0da6151c40");
$z=json_decode($res->getBody());

$result = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/5cac51240d488f0da6151c5d");
$s=json_decode($result->getBody());

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
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" href="roomC.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Level 2</title>
</head>

<body>
<iframe src="../../Audio/fatal-fury.mp3" allow="autoplay" style="display:none" id="iframeAudio">
</iframe>
<div id="top">
    <div class="card mb-3 mt-2" id="enemy-card" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= $z->image ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $z->name ?></h5>
                    E= mes deux ...
                </div>
            </div>
        </div>
    </div>

</div>
<hr/>
<div id="bottom">


    <div class="card bg-dark text-white border 1px mt-4 offset-2" style="width: 60em">
        <div class="card-body">
            <p> <?php echo $z->name?> :Tu viens pour les Oeufs?Tu crois vraiment à ces conneries??!Le lapin c'est un tocard ,il les recupère tout seul si il veut!Surtout qu'hier il était avec <?php echo $s->name?><br>Viens donc avec moi chez Louisette,je t'en paye une!!</p>
        </div>
    </div>
    <div class="card bg-dark text-white border 1px mt-4 offset-2" style="width: 60em">
        <div class="card-body">
            <button type="button" class="btn btn-outline-success mt-3 offset-4" style="width: 18em"><a href="../level1/roomA.php">Petite biere chez Louisette</a></button>
            <button type="button" class="btn btn-outline-success mt-3 offset-4" style="width: 18em"><a href="roomB.php"> Tu essayes de trouver <?= $s->name?></a></button>
        </div>
    </div>
</div>