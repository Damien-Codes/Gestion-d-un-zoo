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
            <h4 class="indentifiant">Nom : </h4><input type="text" name="Nom" value="">
            <h4 class="indentifiant">Prénom: </h4><input type="text" name="prenom" value="">
            <h4 class="indentifiant">Sexe : </h4><input type="text" name="Sexe" value="">
            <h4 class="indentifiant">date_naissance : </h4><input type="text" name="date_naissance" value="">
            <h4 class="indentifiant">Profession : </h4><input type="text" name="Profession" value="">
            <h4 class="indentifiant">Adresse : </h4><input type="text" name="Adresse" value="">
            <h4 class="indentifiant">Salaire : </h4><input type="text" name="Salaire" value="">
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
            $result = mysqli_query($con, "SELECT * FROM personnel");

            // Afficher le tableau HTML
            echo "<table border=1>";
            echo "<tr><th>ID</th><th>Nom</th><th>prenom</th><th>Sexe</th><th>date_naissance</th><th>Profession</th><th>Adresse</th><th>Salaire</th></tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<form method='post'>";
                echo "<tr>";
                echo "<td>".$row["Id"]."</td>";
                echo "<td><input type='text' name='Nom' value='".$row["Nom"]."'></td>";
                echo "<td><input type='text' name='prenom' value='".$row["prenom"]."'></td>";
                echo "<td><input type='text' name='Sexe' value='".$row["sexe"]."'></td>";
                echo "<td><input type='text' name='date_naissance' value='".$row["date_naissance"]."'></td>";
                echo "<td><input type='text' name='Profession' value='".$row["Profession"]."'></td>";
                echo "<td><input type='text' name='Adresse' value='".$row["Adresse"]."'></td>";
                echo "<td><input type='text' name='Salaire' value='".$row["Salaire"]."'></td>";
                echo "<td><input type='submit' name='modifier' value='Modifier'></td>";
                echo "</tr>";
                echo "</form>";
            }

            echo "</table>";

            // Traitement du formulaire de modification
            if (isset($_POST["modifier"])) {
                $id = $_POST["Id"];
                
                $Nom = $_POST["Nom"];
                $prenom = $_POST["prenom"];
                $sexe = $_POST["sexe"];
                $date_naissance = $_POST["date_naissance"];
                $profession = $_POST["Profession"];
                $adresse = $_POST["Adresse"];
                $Salaire = $_POST["Salaire"];

                $query = "UPDATE animaux SET id='$id', Nom='$Nom', prenom='$prenom', sexe='$sexe', date_naissance='$date_naissance',  Profession='$profession', Adresse='$adresse', Salaire='Salaire' WHERE id='$id'";
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