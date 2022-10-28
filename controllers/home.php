<!DOCTYPE html>
<html>
<?php
include 'bdd.php';
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');

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
  <header>

  </header>

  <div class="bg-white">
    <div class="flex min-h-screen items-center justify-center">


      <div class="min-h-1/2 bg-gray-100 border border-gray-300 rounded-2xl shadow-xl">
        <form action="./controllers/authenticate.php" method="post">
          <div class="mx-4 sm:mx-24 md:mx-34 lg:mx-56 mx-auto  flex items-center space-y-4 py-16 font-semibold text-gray-900 flex-col">

            <h1 class="text-gray-900 text-2xl">Login</h1>


            <input class="w-full p-2 bg-gray-50 border border-gray-300 rounded-md   focus:border-blue-700" type="text" name="username" placeholder="E-Mail" id="username" required>

            <input class="w-full p-2 bg-gray-50 border border-gray-300 rounded-md" type="password" name="password" placeholder="Password" id="password" required>

            <input type="submit" class="w-full p-2 bg-gray-50 rounded-full font-bold text-gray-900 border border-gray-700" value="Login">
            <p>Pas de compte ?
              <a class="font-semibold text-cyan-500" href="#">Inscrivez-vous </a>
            </p>
          </div>
        </form>

      </div>

    </div>

<<<<<<< HEAD
      <div>
    <h1>Login</h1>
    <form action="./controllers/authenticate.php" method="post">
      <label for="username">
      </label>
      <input type="text" name="username" placeholder="Username" id="username" required>
      <label for="password">
      </label>
      <input type="password" name="password" placeholder="Password" id="password" required>
      <input type="submit" value="Login">
    </form>
  </div>
    
=======
>>>>>>> dd36841a6f724987433d8e6f6f943a63a9fc7552
</body>

</html>