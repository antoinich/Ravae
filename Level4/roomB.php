<?php

use GuzzleHttp\Client;

require_once '../vendor/autoload.php';
$client = new GuzzleHttp\Client();



$result = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/5cac51240d488f0da6151c5d");
$s=json_decode($result->getBody());

$resulta = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/5cac51240d488f0da6151c3d");
$x=json_decode($resulta->getBody());
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" href="roomB.css" type="text/css" media="screen" />
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
                <img src="<?= $s->image ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $s->name ?></h5>
                    Mais j'te connais toi !!
                </div>
            </div>
        </div>
    </div>

</div>
<hr/>
<div id="bottom">
    <div class="card bg-dark text-white border 1px mt-4 offset-2" style="width: 60em">
        <div class="card-body">
            <p><?php echo $s->name ?> : Hier j'étais trop bourré j'ai tiré les oeufs du lapin de pâques, mais je me les suis fait voler par <?php echo $x->name ?> </p>
        </div>
    </div>
    <div class="card bg-dark text-white border 1px mt-4 offset-2" style="width: 60em">
        <div class="card-body">
            <button type="button" class="btn btn-outline-success mt-3 offset-4" style="width: 18em"><a href="../Level5/room.php">Essayer de trouver <?= $x->name ?></a> </button>
        </div>
    </div>
</div>