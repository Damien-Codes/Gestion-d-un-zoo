<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Gestion d'annimaux</title>
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

        echo $_SESSION["login"];
        echo  '<h3><a href="logout.php">Deconnexion</a></h3>'
        ?>
        </div>
    </nav>
    <div class="center">
        <form Method="POST" action="home.php">
            <h1>GERER</h1>
            <h4 class="indentifiant">Races : </h4><input type="text" name="Races" value="">
            <h4 class="indentifiant">Nourriture: </h4><input type="text" name="Nourriture" value="">
            <h4 class="indentifiant">Durée de vie : </h4><input type="text" name="Duree_de_vie" value="">
            <h4 class="indentifiant">sexe : </h4><input type="text" name="sexe" value="">
            <h4 class="indentifiant">Habitat : </h4><input type="text" name="Habitat" value="">
            <br>
            <br>
            <input class="button" type="submit" value="Ajouter">
                       
        

            <?php
            $con = mysqli_connect("localhost","root","", "gestionzoo");

            // Vérifier la connexion
            if (mysqli_connect_errno()) {
                echo "Erreur de connexion à MySQL : " . mysqli_connect_error();
            }

            // Récupérer les données de la table
            $result = mysqli_query($con, "SELECT * FROM especes");

            // Afficher le tableau HTML
            echo "<table border=1>";
            echo "<tr><th>ID</th><th>Races</th><th>Nourriture</th><th>Duree de vie</th><th>sexe</th><th>Habitat</th></tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<form method='post'>";
                echo "<tr>";
                echo "<td>".$row["Id"]."</td>";
                echo "<td><input type='text' name='Races' value='".$row["Races"]."'></td>";
                echo "<td><input type='text' name='Nourriture' value='".$row["Nourriture"]."'></td>";
                echo "<td><input type='text' name='Durée de vie' value='".$row["Duree_de_vie"]."'></td>";
                echo "<td><input type='text' name='sexe' value='".$row["sexe"]."'></td>";
                echo "<td><input type='text' name='Habitat' value='".$row["Habitat"]."'></td>";
                echo "</form>";
            }

            echo "</table>";

            // Traitement du formulaire de modification
            if (isset($_POST["modifier"])) {
                $id = $_POST["Id"];
                
                $races = $_POST["Races"];
                $nourriture = $_POST["Nourriture"];
                $sexe = $_POST["sexe"];
                $Duree_de_vie = $_POST["Duree_de_vie"];
                $Habitat = $_POST["Habitat"];

                $query = "UPDATE animaux SET id='$id', Races='$races', Nourriture='$nourriture', sexe='$sexe', Duree_de_vie='$Duree_de_vie',  Habitat='$Habitat' WHERE id='$id'";
                if (mysqli_query($con, $query)) {
                    echo "Modification effectuée avec succès";
                } else {
                    echo "Erreur SQL : " . mysqli_error($con);
                }
            }
            ?>
        </form> 
    </div>
</body>
</html>