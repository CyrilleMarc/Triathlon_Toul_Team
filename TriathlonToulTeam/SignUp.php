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
            <img id="image" src="TTT.PNG">
        </div>
        <div id="Title">
            <h1>Nouveau compte</h1>
        </div>
        <div>
            <a href="index.php"><button>Accueil</button></a>
        </div>
    </div>
</header>

<body>
    <div class="membres">
        <div id="membre">
            <form id="formulaire" method="post" action="SignUp.php">
                <h2>Créer un Compte<h2>
                        <h3>Pseudo</h3>
                        <input type="text" name="Nom" id="Nom"><br>
                        <h3>Email</h3>
                        <input type="text" name="Email" id="Email"><br>
                        <h3>Mot de passe</h3>
                        <input type="text" name="Mdp" id="Mdp"><br>
                        <h3>Confirmation du mot de passe</h3>
                        <input type="text" name="ConfirmationMdp" id="Mdp"><br>
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

    #Logo {
        display: flex;
        padding: 15px;

    }

    #image {
        border-radius: 10px;
        width: 200px;
        background-color: yellow;
    }

    button {
        padding: 10px;
        margin: 10px;
        border-radius: 10px;
        font-size: 15px;
        cursor: pointer;
        color: yellow;
        background-color: black;
        font-family: 'Rubik Distressed', cursive;
    }

    button:hover {
        opacity: 0.7;
    }

    h1 {
        font-family: 'Rubik Distressed', cursive;
        font-size: 3em;
    }

    h2 {
        font-size: 25px;
    }

    #Header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: yellow;
        width: 100%;
        height: 20vh;
    }

    #membre {
        display: flex;
        flex-direction: column;
        flex: 2;
        align-items: center;
        font-family: 'Rubik Distressed', cursive;
        color: white;
        padding: 120px;

    }

    input {
        width: 80%;
    }

    #formulaire {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        background-color: yellow;
        color: black;
        width: 30%;
        height: 20%;
        border-radius: 20px;
    }

    @media only screen and (max-width: 1500px) {

        #formulaire {
            width: 20em;
        }
    }

    @media only screen and (max-width: 700px) {
        h1 {
            display: none
        }

        #formulaire {
            width: 20em;
        }
    }
</style>

<body>

</body>

</html>