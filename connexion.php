<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNEXION</title>
</head>
<body>
    <h4 class="inscription"><a href="inscription.php">Inscivez-vous</a></h4>
    <div class="div">
        <form Method="POST" action="home.php">
            <h1>CONNEXION</h1>
            <h4 class="indentifiant">Identifiant : </h4><input type="text" name="login" value="">
            <h4 class="indentifiant">Mot de passe : </h4><input type="password" name="password" value="">
            <br>
            <br>
            <input class="button" type="submit" value="Connexion">
            <!-- <h4 class="#"><a href=".php">HOME</a></h4> -->
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
    $requete="SELECT * from personnel where login= '$login' and mdp= '$mdp' ";
    // $requete="SELECT * FROM personnel WHERE (login, Mot_de_passe) VALUES ('$login', '$mdp')";
    // Execution de la requete
    $resultat=mysqli_query($con, $requete);
        
        if ($nbrligne==1){
            header("location:home.php");
        }
        else{
            header("location:inscription.php");
        }
    }
    ?>
</body>
</html>