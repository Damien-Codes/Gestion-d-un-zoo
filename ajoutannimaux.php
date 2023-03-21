<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Zoo</title>
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
                      <li><a href="#">Ajouter</a></li>
                      <li><a href="#">Gérer</a></li>

                   </ul>
                </li>
                 <li><a href="#">Animaux</a>
                   <ul>
                      <li><a href="#">Ajouter</a></li>
                      <li><a href="#">Gérer</a></li>
                   </ul>
                </li>
                <li><a href="#">Espèces</a>
                   <ul>
                        <li><a href="#">Ajouter</a></li>
                        <li><a href="#">Gérer</a></li>
                   </ul>
                </li>
             </ul>
        </div>
        <div class="logout">
            <?php
            session_start();
            $login = $_SESSION['login']=$_POST['login'];

            echo "<h1> $login :</h1>";
            echo  '<h3><a href="logout.php">Deconnexion</a></h3>';
            ?>
        </div>
    </nav>
    <div class="center">
        <div>
        <form Method="POST" action="home.php">
            <h1>AJOUTER</h1>
            <h4 class="indentifiant">Nom : </h4><input type="text" name="nom" value="">
            <h4 class="indentifiant">Sexe : </h4><input type="text" name="sexe" value="">
            <h4 class="indentifiant">Anniversaire : </h4><input type="text" name="anniversaire" value="">
            <br>
            <br>
            <input class="button" type="submit" value="Ajouter">
        </form>
        </div>
        <div>
        <form Method="POST" action="home.php">
            <h4 class="indentifiant">Anniversaire : </h4><input type="text" name="anniversaire" value="">
            <br>
            <br>
            <input class="button" type="submit" value="Ajouter">
        </form>
        </div>
    </div>
</body>
</html>