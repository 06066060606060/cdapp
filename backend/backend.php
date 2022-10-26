<?php
session_start();
// If the  not logged redirect to index...

if (!isset($_SESSION['loggedin'])) {
	header('Location: .././index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Liste des Posts</title>
    <link rel="stylesheet" href=".././css/stylesheet.css">
    <link rel="stylesheet" href=".././css/backend.css">

</head>

<body>
<div class="back"></div>
    <div class="container">
        <div class="navbarb">
        <div id="btnaccueil"><a href=".././index.php" style="color: white">Page d'accueil</a></div>
        <div id="btnnewpost"><a href=".././creation.php" style="color: white">Creer Nouveau Post</a></div>
        <div id="btnnewpost"><a href="./logout.php" style="color: white">Se Déconnecter</a></div>
        <p style="font-size: 18px; padding:10px; color:white">Salut, <?=$_SESSION['name']?></p> 
        <p style="color:white; padding-left:10px">Liste de tes Posts:</p>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <th>titre</th>
                        <p>
                            <th>Date</th>
                        <p>                     
                            <th>image du post</th>
                        <p>
                            <th>contenu du post</th>
                       
                        <p>
                        <th>Catégorie</th>
                        <p>
                            <th>Aperçu</th>
                        <p>
                        <th>Edition</th>
                        <p>
                        <th>Activer</th>
                        <p>
                            <th>Désactiver</th>
                        <p>
                            <th>Actif</th>
                        <p>
                            <th>Supprimer</th>
                        <p>

                    </thead>

                    <tbody>
                        <?php include './bdd.php';
                        $userid = $_SESSION['id'];
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>