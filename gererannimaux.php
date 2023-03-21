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
                      <li><a href="#">Gérer</a></li>

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
            <h4 class="indentifiant">Especes : </h4><input type="text" name="Especes" value="">
            <h4 class="indentifiant">Sexe : </h4><input type="text" name="Sexe" value="">
            <h4 class="indentifiant">Pseudo : </h4><input type="text" name="Pseudo" value="">
            <h4 class="indentifiant">date_naissance : </h4><input type="text" name="date_naissance" value="">
            <h4 class="indentifiant">Commentaire : </h4><input type="text" name="Commentaire" value="">
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
            $result = mysqli_query($con, "SELECT * FROM animaux");

            // Afficher le tableau HTML
            echo "<table border=1>";
            echo "<tr><th>ID</th><th>Especes</th><th>Sexe</th><th>Pseudo</th><th>date_naissance</th><th>Commentaire</th></tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<form method='post'>";
                echo "<tr>";
                echo "<td>".$row["Id"]."</td>";
                echo "<td><input type='text' name='Especes' value='".$row["Especes"]."'></td>";
                echo "<td><input type='text' name='Sexe' value='".$row["Sexe"]."'></td>";
                echo "<td><input type='text' name='Pseudo' value='".$row["Pseudo"]."'></td>";
                echo "<td><input type='text' name='Date_naissance' value='".$row["date_naissance"]."'></td>";
                echo "<td><input type='text' name='Commentaire' value='".$row["Commentaire"]."'></td>";
                echo "<td><input type='submit' name='modifier' value='Modifier'></td>";
                echo "</tr>";
                echo "</form>";
            }

            echo "</table>";

            // Traitement du formulaire de modification
            if (isset($_POST["modifier"])) {
                $id = $_POST["Id"];
                $especes = $_POST["Especes"];
                $sexe = $_POST["Sexe"];
                $pseudo = $_POST["Pseude"];
                $date_naissance = $_POST["date_naissance"];
                $Commentaire = $_POST["Commentaire"];

                $query = "UPDATE animaux SET id='$id', especes='$especes', sexe='$sexe', pseudo='$pseude' date_naissance='$date_naissance',  commentaire='$Commentaire' WHERE id='$id'";
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