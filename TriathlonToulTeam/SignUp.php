
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace membres</title>
</head>
<header>
<div id="Header">
        <div id="Logo">
            <img src="TTT.PNG">
        </div>

        <div id="Title">
            <h1>Espace de connexion</h1>
        </div>

</header>

<body>
    <div class="membres">
        <div id="membre">
            <form method="post" action="index.php">
                <h3>Nom athlète</h3>
                <input type="text" name="Nom" id="Nom"><br>
                <h3>Mot de passe</h3>
                <input type="text" name="Mdp" id="Mdp"><br>
                <button type="submit" value="envoyer">Valider</button>
            </form>
        </div>
    </div>
</body>

</html>
<?php
try {
    $bdd = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_ecb86cfcf145222;charset=utf8', "beceab70a9685f", "134b075f");
    if (isset($_POST['Nom']) && isset($_POST['Mdp'])) {
        $req = $bdd->prepare('INSERT INTO membres(Nom, Mdp) VALUES(:Nom, :Mdp)');
        $req->execute(array(
            'Nom' => $_POST['Nom'],
            'Mdp' => $_POST['Mdp']
        ));
    } 
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?> 
<style>
    body {
        margin: 0%;
        padding: 0;
        /* background-image: url("./message.jpg"); */
        background-size: cover;
    }

    button {
        padding: 15px;
        margin-top: 10px;
        margin-left: 10px;
        border-radius: 10px;
        /* font-family: 'Mouse Memoirs', sans-serif;
        letter-spacing: .1em; */
        font-size: 20px;
        /* color: white; */
        /* background-color: #DFBB9D; */
        cursor: pointer;
        /* text-shadow: 0.1em 0.1em 0.2em black; */
    }

    button:hover {
        opacity: 0.7;
    }

</style>

<body>

</body>

</html>
