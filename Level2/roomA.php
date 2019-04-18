<?php
require_once '../vendor/autoload.php';
$client = new GuzzleHttp\Client();
$res = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/random");
$d=json_decode($res->getBody());
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Level2_RoomA</title>
    </head>
    <header>
    </header>
    <body>
        <h1></h1>
        <div class="container">
            <div class="row">
                <div class="media">
                    <img src="<?php echo $d->image?>" class="mr-3" height=150px alt="Characters">
                    <div class="media-body">
                        <h5 class="mt-0"><?php echo $d->name?></h5>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="media">
                        <img src="" class="mr-3" height=150px alt="Characters">
                        <div class="media-body">
                            <h5 class="mt-0"><? echo $_POST['pseudo'] ?></h5>
                        </div>
                    </div>
                    <p>
                    Vous vous retrouvez en face de <?php echo $d->name?> que voulez vous faire
                    </p>
                    <button type="submit">Combats</button>
                    <button type="submit">Fuir</button>
                </form>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>