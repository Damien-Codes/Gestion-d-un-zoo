<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Ajout d'annimaux</title>
</head>
<body>
<nav>
        <div class="home">
            <h2 class="#"><a href="home.php">HOME</a></h2>
        </div>
        <div class="btn">
            <ul id="menu-accordeon">
                <li><a href="#">Gestion des employés</a>
                   <ul>
                      <li><a href="ajoutemploye.php">Ajouter</a></li>
                      <li><a href="gereremploye.php">Gérer</a></li>

                   </ul>
                </li>
                 <li><a href="#">Animaux</a>
                   <ul>
                      <li><a href="ajoutanimaux.php">Ajouter</a></li>
                      <li><a href="gererannimaux.php">Gérer</a></li>
                   </ul>
                </li>
                <li><a href="#">Espèces</a>
                   <ul>
                        <li><a href="ajoutespece.php">Ajouter</a></li>
                        <li><a href="gererespece.php">Gérer</a></li>
                   </ul>
                </li>
             </ul>
        </div>
        <div class="logout">
        <?php
        // Connexion a la base de données
        $con = mysqli_connect("localhost","root","", "gestionzoo");
        // session connecté
        session_start();

        echo $_SESSION["login"];
        echo  '<h3><a href="logout.php">Deconnexion</a></h3>'
        ?>
        </div>
    </nav>
    <div class="center">
        <form Method="POST" action="home.php">
            <h1>AJOUTER</h1>
            <h4 class="indentifiant">Nom : </h4><input type="text" name="nom" value="">
            <h4 class="indentifiant">Nourriture : </h4><input type="text" name="Nourriture" value="">
            <h4 class="indentifiant">Durée de vie : </h4><input type="text" name="Durée de vie" value="">
            <h4 class="indentifiant">Habitat : </h4><input type="text" name="Habitat" value="">
            <br>
            <br>
            <input class="button" type="submit" value="Ajouter">
        </form>
    </div>
</body>
</html>