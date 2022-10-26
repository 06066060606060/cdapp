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

      <div>
    <h1>Login</h1>
    <form action="/controllers/authenticate.php" method="post">
      <label for="username">
      </label>
      <input type="text" name="username" placeholder="Username" id="username" required>
      <label for="password">
      </label>
      <input type="password" name="password" placeholder="Password" id="password" required>
      <input type="submit" value="Login">
    </form>
  </div>
    
</body>

</html>