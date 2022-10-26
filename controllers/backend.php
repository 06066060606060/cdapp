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
    <link rel="stylesheet" href=".././css/stylesheet.css">
    <link rel="stylesheet" href=".././css/backend.css">

</head>

<body>
<div class="back"></div>
    <div class="container">
        <div class="navbarb">
        <div id="btnnewpost"><a href="./logout.php" style="color: white">Se Déconnecter</a></div>
        <p style="font-size: 18px; padding:10px; color:black">Salut, <?=$_SESSION['name']?></p> 
      
        </div>
    </div>
</body>

</html>