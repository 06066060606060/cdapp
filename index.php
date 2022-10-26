<!DOCTYPE html>
<html>
<?php
include './backend/bdd.php';
include './backend/mesfonction.php';
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
	         
if(isset($_SESSION['loggedin'])) {
            echo "<div class='logbck'><p class='logged'>Vous êtes connecté &zwnj;", $_SESSION['name'];
            echo "<div class='btnbackend'><a href='./backend/backend.php'>Backend</a><a href='./backend/logout.php'>Déconnecter</a></div></div></p>";
        }
?>



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/stylesheet.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="text/javascript" src="./js/anim.js"></script>
  <title>webapp</title>
</head>

<body>

<div id="overlay"></div>


  <div id="login">
      <p class="flex flex-row-reverse text-red-600 font-bold pr-2 pt-2 select-none" onclick="off()">X</p>
    <h1>Login</h1>
    <form action="./backend/authenticate.php" method="post">
      <label for="username">
        <i class="fa-solid fa-user"></i>
      </label>
      <input type="text" name="username" placeholder="Username" id="username" required>
      <label for="password">
        <i class="fa-solid fa-lock"></i>
      </label>
      <input type="password" name="password" placeholder="Password" id="password" required>
      <input type="submit" value="Login">
    </form>
  </div>

  <div class="back" id="back"></div>

      <header>
      
      </header>

    

      <div class="flex items-center float-right mr-8 bg-blue-600 text-white px-4 rounded mt-4" onclick="on()">login</div>


      <main class="main">

        <?php
        indexpage();
        ?>
      </main>



      
  </div>
</body>

</html>