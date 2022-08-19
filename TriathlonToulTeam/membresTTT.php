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
            <tr id="tableau">
                <?php foreach ($Athletes as $Athlete) : ?>
                    <td><?php echo $Athlete['Nom']; ?></td>
                    <td><?php echo $Athlete['Email']?></td><br />
                <?php endforeach; ?>
            </tr>
        </div>
    </div>
</body>
</html>
<style>
    #tableau{
        border-color: 1px solid black;
        width: 80%;
        margin: auto;
        text-align: center;
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
</style>
