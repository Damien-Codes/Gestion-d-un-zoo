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

            session_start();
            $_SESSION['login']=$_POST['login'];

            // echo "<h1> $login :</h1>";
            echo $_SESSION["login"];
            echo  '<h3><a href="logout.php">Deconnexion</a></h3>';
            ?>
        </div>
    </nav>
    <div class="center">
        <h1>PROJET GESTION DU ZOO PPE4</h1>
    </div>
</body>
</html>