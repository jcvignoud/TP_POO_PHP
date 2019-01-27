<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil du site</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <p><a href="Index.php?p=News">Accéder à l'acceuil du site</a></p>
        
        <div id="manageNews">
            <div class="monMenu">
                <form method="post" action="">
                    <div class="mesInfos">
                        <p>
                            <label for="Auteur">Auteur     :</label>
                            <input type="text" name="Auteur"/>
                        </p>
                        <p>    
                            <label for="Titre">Titre      :</label>
                            <input type="text" name="Titre"/>
                        </p>
                    </div>
                    <div class="mesCommentaires">
                        <p>
                            <label for="Contenu">Contenu    :</label><br/>
                            <textarea name="Contenu" id="Contenu" cols="50" rows="10"></textarea>
                        </p>
                    </div>
                    <p>
                        <input type="submit" value="Ajouter"/>
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>