<?php

include 'config.php';
require './MineCMS/php/mojang-api.class.php';

?>
<!-- MineCMS 1.0 -->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./MineCMS/css/index.css">
        <script src="./MineCMS/js/index.js"></script>
        <title><?php echo $nameServeur; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    </head>
    <body>
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
<div class="w3-display-topleft w3-padding-large w3-xlarge">
    Membres connectés : <c-r><?php $query = MojangAPI::query($ipServeur, 25565);
if ($query) {
    echo '' . $query['players'] . ' players sur ' . $query['maxplayers'];
} else {
    echo 'Serveur éteint.';
} ?></c-r>
</div>
            <div class="w3-display-middle">
            <h1 class="w3-jumbo w3-animate-top"><?php echo $nameServeur; ?></h1>
            <hr class="w3-border-grey" style="margin:auto;width:40%">
            <center>
            <p class="w3-large w3-center">  <?php echo $typeServeur; ?></p>
            </center>
            <center><p>IP de notre magnifique serveur : <?php echo $ipServeur; ?></p><br><p>Version de notre serveur : <?php echo $versionServeur; ?></center>
            </div>
            <div class="w3-display-bottomleft w3-padding-large">
                Discord : <?php echo $lienDiscord; ?><br>
                Twiiter : <?php echo $lienTwitter; ?><br>
                TeamSpeak : <?php echo $ts; ?><br>
                Youtube : <?php echo $lienYoutube; ?><br>
            </div>
            <div class="w3-display-bottomright w3-padding-large">
            <?php $ping = MojangAPI::ping($ipServeur, 25565);
if ($ping) {
    $img = '<img src="' . MojangAPI::embedImage($ping['favicon']) . '" alt="Favicon of server">';
    echo $img;
} else {
    echo 'Server is offline.';
} ?>
            </div>
        </div>
    </body>
</html>