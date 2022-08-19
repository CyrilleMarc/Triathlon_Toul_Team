<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <div id="Header">
        <div id="Logo">
            <img src="TTT.PNG">
        </div>

        <div id="Title">
            <h1>Triathlon Toul Team</h1>
        </div>

        <div id="Navigation">
            <a href="SignUp.php">
                <li>S'enregistrer</li>
            </a>
            <a href="Login.php">
                <li>Se connecter</li>
            </a>
            <a href="https://www.t2area.com/clubs/1-fftri-federation-francaise-de-triathlon/533-triathlon-toul-team.html#:~:text=Le%20club%20de%20Triathlon%20TRIATHLON,FFTRI%20%2D%20F%C3%A9d%C3%A9ration%20Fran%C3%A7aise%20de%20Triathlon."
                target="blank">
                <li> Résultats</li>
            </a>
            <a href="https://espacetri.fftri.com/users/license/account-registration#" target="blank">
                <li>Ma licence</li>
            </a>
        </div>
    </div>

    <?php require_once('Login.php'); ?>
    Bienvenue : <?php echo $_SESSION['Nom']; ?> 
    <a href="logout.php">Se déconnecter</a>

</body>
</html>
<style>
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