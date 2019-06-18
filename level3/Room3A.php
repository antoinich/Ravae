<?php
use GuzzleHttp\Client;
require_once '../vendor/autoload.php';
$client = new GuzzleHttp\Client();
$res = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/random");
$d=json_decode($res->getBody());
$result = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/5cac51240d488f0da6151c65");
$h=json_decode($result->getBody());
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Room3A.css" type="text/css" media="screen" />

    <title>Salle 3A</title>
</head>

<body>
<iframe src="../../Audio/8-bit-boss-battle.mp3" allow="autoplay" style="display:none" id="iframeAudio">
</iframe>
<div id="top">
    <div class="card mb-3 mt-2" id="enemy-card" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= $h->image ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $h->name ?></h5>
                    <p class="harley">Salut beau gosse!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr/>
<div id="bottom">


    <div class="card bg-dark text-white border 1px mt-4 offset-2" style="width: 60em">
        <div class="card-body">
            <p><?php echo $h->name ?>: Je t'ai vu discuter avec le lapin de paques hier, pour les oeufs ça ne me dit rien...<br>Mais il y a ce <a href="https://github.com/FrancoisDoussin">type louche</a> au bar qui n'arrettait pas de te regarder...Je connais un grand savant il pourra peut etre t'aider!</p>
        </div>
    </div>
    <div class="card bg-dark text-white border 1px mt-4 offset-2" style="width: 60em">
        <div class="card-body">
            <button type="button" class="btn btn-outline-success mt-3 offset-4" style="width: 18em"><a href="../Level4/roomC.php">Allez voir le savant</a></button>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
