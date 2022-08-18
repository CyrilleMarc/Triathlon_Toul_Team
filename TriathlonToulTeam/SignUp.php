<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
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
        <div>
        <a href ="index.php"><button>Accueil</button></a>;

</header>

<body>
    <div class="membres">
        <div id="membre">
            <form id="formulaire" method="post" action="index.php">
                <h3>Pseudo</h3>
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
        echo 'Enregistrement effectué avec succès';
    }
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<style>
    body {
        margin: 0%;
        padding: 0;
        background-image: url("ashley-de-lotz-Vr3Xi8_2NgY-unsplash.jpg");
        background-size: cover;
    }

    button {
        padding: 10px;
        border-radius: 10px;
        /* font-family: 'Mouse Memoirs', sans-serif;
        letter-spacing: .1em; */
        font-size: 15px;
        /* color: white; */
        /* background-color: #DFBB9D; */
        cursor: pointer;
        /* text-shadow: 0.1em 0.1em 0.2em black; */
    }

    button:hover {
        opacity: 0.7;
    }

    h1{
        font-family: 'Rubik Distressed', cursive;
        font-size: 3em;
    }
    #Header {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: yellow;
        width: 100%;
        height: 20vh;
    }

    #membre {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Rubik Distressed', cursive;
        padding: 60px;

    }

    button {
        color: yellow;
        background-color: black;
        font-family: 'Rubik Distressed', cursive;
    }

    input{
        width: 100%;
    }

    #formulaire{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
    }
</style>

<body>

</body>

</html>