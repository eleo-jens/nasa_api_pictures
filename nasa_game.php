<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Notre API Key de la NASA pour avoir droit à 1000 requête par heure par adresse IP
    3mpbloKSNnuBe6UpTH6LuvEpHLuMstO6NcviGMEj -->
    
    <!-- https://api.nasa.gov/planetary/apod?api_key=3mpbloKSNnuBe6UpTH6LuvEpHLuMstO6NcviGMEj
    
    https://api.nasa.gov/planetary/apod?api_key=3mpbloKSNnuBe6UpTH6LuvEpHLuMstO6NcviGMEj&count=6
    
    https://api.nasa.gov/planetary/apod?api_key=3mpbloKSNnuBe6UpTH6LuvEpHLuMstO6NcviGMEj&date=2022-10-25&thumbs=true -->
    
    <!-- Coder l'appel de l'API avec JS xhr et json.PARSE la réponse reçue et afficher la photo ou la vidéo dans le DOM-->
    
    <p>Une API est une interface qui permet à une application comme la notre de récupérer les données d'une autre application. 
    Vous allez utliser l'<a href="https://api.nasa.gov/" target="_blank">API de la NASA</a> pour afficher de magnifiques photos de l'espace.</p>

    <p>Il suffit de charger l'url suivant. Mais avant, vous devez faire deux modifications:</p>

    <ul>
        <li>Affichez 3 images</li>
        <li>Indiquez le paramère <code>thumbs</code> à <code>true</code></li>
    </ul>
    
    <form>
        <p><code>https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&count=</code>
            <input type="number" min="0" id="count">
            <code>&thumbs=</code>
            <select name="thumbs" id="thumbs-select">
                <option value="">--Options--</option>
                <option value="false">False</option>
                <option value="true">True</option>
            </select>
        </p>
        <!-- voir pour désactiver l'envoi du formulaire car on travaille avec JS -->
        <p id="valider">Valider</p>
    </form>
    <div id="resultat"></div>
    <script src="./nasa_pictures.js" type="text/javascript"></script>
</body>
</html>



