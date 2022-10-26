<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- Notre API Key de la NASA pour avoir droit à 1000 requête par heure par adresse IP
    3mpbloKSNnuBe6UpTH6LuvEpHLuMstO6NcviGMEj -->
    <div id="question_picture">
        <p>Une API est une interface qui permet à une application comme la notre de récupérer les données d'une autre application.
            Vous allez utliser l'<a href="https://api.nasa.gov/" target="_blank">API de la NASA</a> pour afficher de magnifiques photos de l'espace.</p>

        <p>Il suffit de charger l'url suivant. Mais avant, vous devez faire deux modifications:</p>

        <ul>
            <li>Affichez 3 images</li>
            <li>Indiquez le paramètre <code>thumbs</code> à <code>true</code></li>
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
    </div>
    <div id="resultat"></div>
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Que faites vous ?</h1>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Pas de <code>3</code>, ni de <code>true</code>: Pas de photos ! :)</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    <!-- <input class="btn btn-default" value="Close"> -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="./nasa_pictures.js" type="text/javascript"></script>
</body>

</html>