<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Website</title>
</head>

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
                <li>Espace membres</li>
            </a>
            <a href="https://www.t2area.com/clubs/1-fftri-federation-francaise-de-triathlon/533-triathlon-toul-team.html#:~:text=Le%20club%20de%20Triathlon%20TRIATHLON,FFTRI%20%2D%20F%C3%A9d%C3%A9ration%20Fran%C3%A7aise%20de%20Triathlon."
                target="blank">
                <li> Résultats</li>
            </a>
            <a href="Competitions.html">
                <li>Compétitions</li>
            </a>
            <a href="https://espacetri.fftri.com" target="blank">
                <li>Prendre une licence</li>
            </a>
        </div>
    </div>

    <div id="presentation">
        <h2>Le triathlon est une discipline sportive constituée de trois épreuves d'endurance enchaînées dans l'ordre
            suivant : natation, cyclisme et course à pied. Sa forme moderne apparaît officiellement aux États-Unis en
            1974 et se développe depuis dans le monde entier. Se pratiquant sur des distances très variées, le triathlon
            devient discipline olympique en l'an 2000 aux Jeux de Sydney sur la longueur standard de 1 500 mètres de
            natation, 40 kilomètres de vélo et 10 kilomètres de course à pied. Il est géré et structuré au niveau
            mondial par la Fédération internationale de triathlon (World Triathlon) et un ensemble de fédérations
            continentales et nationales qui déclinent selon leurs spécificités les règles générales édictées par la
            fédération internationale.</h2>
    </div>
    <div id="trait_dessus"></div>
    <div id="Natation">
        <img id="Photo-natation" src="jon-del-rivero-AjF5fv4-a2U-unsplash.jpg" alt="nageurs en eau libre">
        <div id="Natation-text">
            <p>La première épreuve est une épreuve de natation en eaux libres. Bien que les entraînements se fassent
                généralement en piscine, les compétitions se déroulent en eau libre (mer, en lac ou étang, voire en
                rivière). Le départ est effectué soit de manière groupée (Mass start), soit par vagues successives
                déterminées par l'organisation ou encore depuis 2016, sur les compétitions longues distances
                principalement, par roulement dit en Rolling Start. Ce départ en flux continu au travers d'un portique
                réducteur où démarre un chronométrage individuel, permet une fluidification et un étalement de l'entrée
                dans l'eau des triathlètes.</p>
        </div>
    </div>
    <div id="trait_dessus"></div>
    <div id="Cyclisme">
        <div id="Cyclisme-text">
            <p>La deuxième composante sportive est le cyclisme. Dans la pratique générale l'épreuve se déroule sous
                forme d'un effort individuel, donc exempt de l'effet d'aspiration du peloton. Les épreuves
                olympiques et les grandes épreuves fédérales pour la catégorie élite et sur courtes distances uniquement
                sont exemptées de cette disposition. En pratique, cela se concrétise par la formation de pelotons qui
                permettent la mise en œuvre de collaborations entre les compétiteurs.</p>
        </div>
        <img id="Photo-cyclisme" src="tony-pham-uLDCjIBexZI-unsplash.jpg" alt="triathlète en position aérodynamique">
    </div>
    <div id="trait_dessus"></div>
    <div id="Cap">
        <img id="Photo-Cap" src="quino-al-gLnHYHYyD3c-unsplash.jpg" alt="triathlète féminine epreuve de course à pied">
        <div id="Cap-text">
            <p>La troisième et dernière épreuve est une course de fond classique
                sur route ou sur chemin. Elle peut varier de 5 à 42.2km selon l'épreuve.
                C'est lors de cette dernière discipline que vous verrez si votre gestion de course a été bonne ou non...
            </p>
        </div>
    </div>
    <div id="trait_dessus"></div>
    <div id="Transition">
        <div id="Transition-text">
            <p>Une des caractéristiques principales du triathlon tient dans l’obligation d'enchaînement de ces trois
                composantes au cours de transitions qui font partie intégrante du temps global comptabilisé aux
                participants.
                Ces transitions imposent aux athlètes d'effectuer des
                changements de disciplines et de matériels entre deux épreuves.</p>
        </div>
        <img id="Photo-Transition" src="christopher-eden-ov0caEZKBsY-unsplash.jpg" alt="Athlète en zone de transition">
    </div>
</body>
<div id="trait_dessus"></div>
<footer id="Footer">
    <div id="contacts">
        <h3>Liens utiles:</h3>
        <a href="https://www.facebook.com/TriToulTeam">
            <li id="Facebook">Facebook</li>
        </a>
    </div>
</footer>

</html>

<style>
    * {
        padding: 0;
        margin: 0;
    }

    #trait_dessus {
        border-top: 1px solid yellow;
        width: 100%;

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

    #presentation {
        background-color: yellow;
    }

    h2 {
        padding: 15px;
        font-family: 'Rubik Dirt', cursive;
        font-size: 20px;
        letter-spacing: .2em;
        font-weight: 200;
        color: black;
    }

    #Photo-natation {
        width: 50%;
        height: auto;
        padding: 15px;
        border-radius: 30px;

    }

    #Natation {
        display: flex;
        flex: 1;
        background-color: black;
        align-items: stretch;


    }

    #Natation-text {
        color: yellow;
        margin: 55px;
    }

    #Photo-cyclisme {
        width: 48%;
        height: auto;
        padding: 15px;
        border-radius: 20px;
    }

    #Cyclisme {
        display: flex;
        flex: 1;
        background-color: black;
        align-content: stretch;
    }

    #Cyclisme-text {
        color: yellow;
        margin: 50px;
    }

    #Photo-Cap {
        width: 50%;
        height: auto;
        padding: 15px;
        border-radius: 20px;
    }

    #Cap {
        display: flex;
        flex: 1;
        background-color: black;
        align-items: center;
    }

    #Cap-text {
        margin: 50px;
        color: yellow;

    }

    #Photo-Transition {
        width: 48%;
        height: auto;
        padding: 15px;
        border-radius: 20px;
    }

    #Transition-text {
        color: yellow;
        margin: 50px;
    }

    #Transition {
        display: flex;
        flex: 1;
        background-color: black;
        align-items: center;
    }

    p {
        font-family: 'Rubik Dirt', cursive;
        padding: 15px;
        font-size: 25px;

    }

    #Footer {
        align-items: center;

    }

    h3 {
        font-family: 'Rubik Dirt', cursive;
        border-bottom: .1px solid yellow;
        color: yellow;
    }

    #contacts {
        background-color: black;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        list-style: none;
        padding: 20px;
        font-weight: 200;
        letter-spacing: .1em;
    }

    #Facebook {
        padding: 10px;
        font-family: 'Rubik Dirt', cursive;
        cursor: pointer;
        color: yellow
    }

    #Facebook:hover {
        font-size: 20px;
        ;
    }

    #Contact {
        margin-right: 10px;
        font-family: 'Rubik Dirt', cursive;
    }


    @media only screen and (max-width: 1400px) {

        #Navigation {
            flex-direction: column;
            padding: 10px;
        }
    }

    @media only screen and (max-width: 800px) {
        *{margin: 0; padding: 0;}

        h1 {display: none;}

        #presentation{padding-top: 70px;}

        #Header {flex-direction: column; 
                 padding: 10px;}

        #Natation{ flex-direction: column; align-items: center; padding : 5px;}
        #Photo-natation { width: 80%}
        #Natation-text {width: 80%;}

        #Cyclisme{ flex-direction: column-reverse; align-items: center;}
        #Photo-cyclisme { width: 80%}
        #Cyclisme-text {width: 80%;}

        #Cap{ flex-direction: column; align-items: center;}
        #Photo-Cap { width: 80%}
        #Cap-text {width: 80%;}

        #Transition{ flex-direction: column-reverse; align-items: center;}
        #Photo-Transition { width: 80%}
        #Transition-text {width: 80%;}
    }
    
</style>