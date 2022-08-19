<?php
try {
    $bdd = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_ecb86cfcf145222;charset=utf8', "beceab70a9685f", "134b075f");
    $req = $bdd->prepare('SELECT * FROM membres');
    $req->execute();
    $Athletes = $req->fetchAll();
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
    <title>Espace membres</title>
</head>

<header>
    <div class="container">
        <h1>ESPACE MEMBRES TTT</h1>
    </div>
</header>

<body>
    <div id="content">
        <div>
            <table>
                <?php foreach ($Athletes as $Athlete) : ?>
                    <td><?php echo '"' . $Athlete['Nom'] . '"'; ?></td>
                    <td><?php echo "-" . $Athlete['Email'] . "-"; ?></td>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html