<!-- <?php
        try {
            $bdd = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_ecb86cfcf145222;charset=utf8', "beceab70a9685f", "134b075f");
            $req = $bdd->prepare('SELECT * FROM membres');
            $req->execute();
            $Athletes = $req->fetchAll();
            $req->closeCursor();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
    <title>Espace membres</title>
</head>

<body>

    <body>
        <div id="Header">
            <div id="Logo">
                <img src="TTT.PNG">
            </div>

            <div id="Title">
                <h1>Espace membres TTT</h1>
            </div>

            <div id="Navigation">
                <a href="SignUp.php">
                    <li>S'enregistrer</li>
                </a>
                <a href="Login.php">
                    <li>Se connecter</li>
                </a>
                <a href="https://www.t2area.com/clubs/1-fftri-federation-francaise-de-triathlon/533-triathlon-toul-team.html#:~:text=Le%20club%20de%20Triathlon%20TRIATHLON,FFTRI%20%2D%20F%C3%A9d%C3%A9ration%20Fran%C3%A7aise%20de%20Triathlon." target="blank">
                    <li> Résultats</li>
                </a>
                <a href="https://espacetri.fftri.com/users/license/account-registration#" target="blank">
                    <li>Ma licence</li>
                </a>
            </div>
        </div>
    </body>
    <div id="content">
        <div id="tableau">
            <table>
                <caption>Liste des membres</caption>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($Athletes as $Athlete) : ?>
                    <tr>
                        <td><?php echo $Athlete['Nom']; ?></td>
                        <td><?php echo $Athlete['Prenom']; ?></td>
                        <td><?php echo $Athlete['Pseudo']; ?></td>
                        <td><?php echo $Athlete['Email']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 0%;
        padding: 0;
        background-image: url("orca-QmiCuCxMUeU-unsplash.jpg");
        background-size: cover;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        color: black;
        font-family: monospace;
        font-size: 25px;
        text-align: center;
        margin: 20px ;
    }

    th {
        background-color: yellow;
        color: black;
        border: 1px solid black;
    }

    td {
        border: 1px solid black;
    }

    h1 {
        font-family: 'Rubik Distressed', cursive;
        font-size: 3em;
    }
    #Header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: yellow;
        width: 100%;
        height: 20vh;
    }

    #Logo {
        display: flex;
        flex: 1;
        padding: 15px;
    }

    img {
        border-radius: 10px;
        width: 200px;
        background-color: transparent;
    }

    #Title {
        display: flex;
        flex-direction: column;
        flex: 1;
        font-family: 'Rubik Distressed', cursive;
        font-size: 16px;
        letter-spacing: .1em;
        margin-right: 5%;
    }

    #Navigation {
        display: flex;
        flex: 2;
        justify-content: space-around;
        align-items: center;
        list-style: none;
        font-family: 'Rubik Distressed', cursive;
        cursor: pointer;
        text-decoration: none;
    }

    a {
        text-decoration: none;
        color: black;
    }

    li {
        border-bottom: 0.2rem solid transparent;

    }

    li:hover {
        border-bottom: 0.1rem solid black;
    }

    @media only screen and (max-width: 1000px) {

        h1 {display: none;}
        #Navigation {flex-direction: column;}
        table{max-width: 90%;}

}

@media only screen and (max-width: 640px) {
    #tableau{
        max-width: 80%;
    }
}

</style>