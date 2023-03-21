<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIPTION</title>
</head>
<body>
    <h4 class="inscription"><a href="connexion.php">Connectez-vous</a></h4>
    <div class="div">
        <form Method="POST" action="inscription.php">
            <h1>INSCRIPTION</h1>
            <h4 class="indentifiant">Identifiant : </h4><input type="text" name="login" value="">
            <h4 class="indentifiant">Mot de passe : </h4><input type="password" name="password" value="">
            <!-- <h4 class="indentifiant">Nom : </h4><input type="text" name="Nom" value="">
            <h4 class="indentifiant">Prénom : </h4><input type="text" name="prenom" value="">
            <h4 class="indentifiant">Sexe : </h4><input type="text" name="sexe" value="">
            <h4 class="indentifiant">Date de Naissance : </h4><input type="text" name="date_naissance" value="">
            <h4 class="indentifiant">Profession : </h4><input type="text" name="Profession" value="">
            <h4 class="indentifiant">Adresse : </h4><input type="text" name="Adresse" value="">
            <h4 class="indentifiant">Salaire : </h4><input type="text" name="Salaire" value=""> -->
            <br>
            <br>
            <input class="button" type="submit" value="Inscription">
        </form>
    </div>
<?php
if(!empty($_POST)){
    // Connexion a la base de données
    $con = mysqli_connect("localhost","root","", "gestionzoo");
    // Récuperation des champs dans un formulaire
    $login=$_POST['login'];
    $mdp=$_POST['password'];
    // Préparation de la requete
    $requete="INSERT INTO personnel (login, Mot_de_passe) VALUES ('$login', '$mdp')";
    // Execution de la requete
    $resultat=mysqli_query($con, $requete);
}
?>
</body>
</html>