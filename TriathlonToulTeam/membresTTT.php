<?php
try {
    $bdd = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_ecb86cfcf145222;charset=utf8', "beceab70a9685f", "134b075f");
    $req = $bdd->prepare('SELECT Nom, Email FROM membres');
    $req->execute();
    $Athlete = $req->fetchAll();
    $req->closeCursor();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&family=Oswald:wght@200&display=swap" rel="stylesheet">
    <title>Anniversaire Zoé</title>
</head>

<header>
    <div class="container">
        <h1>Anniversaire de Zoé : 20 ans déjà !</h1>
    </div>
</header>

<body>
    <div id="content"></div>
    <div class="photos">
        <div id="photo"><a href="./diaporama.php"><img src="./diaporama.png"></a></div>
        <div id="photo"><a href="./cadeau.php"><img src="./cadeau.png"></a></div>
        <div id="photo"><a href="./PostMessage.php"><img src="./message.png"></a></div>
    </div>
    </div>
    <h3 id="titleMessage">Messages de la famille:</h3>
    <div>
        <table>
            <?php foreach ($messages as $message) : ?>
                <td><?php echo '"' . $Athlete['Nom'] . '"'; ?></td>
                <td><?php echo "-" . $Athlete['Email'] . "-"; ?></td>

            <?php endforeach; ?>
        </table>
    </div>
</body>

</html