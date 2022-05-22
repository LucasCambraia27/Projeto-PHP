<?php
session_start();
if ( ! isset($_SESSION['logado'])) {
   header('Location: https://Projeto-PHP.lucascambraia.repl.co/teladelogin.php?erro=1');
}

?>

<html>
  <head>
    <title>PHP Test</title>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- entender porque do script -->
    <script>
      let senha=123; 
    </script>
  </head>
  <body>
    
    <div class = "container">

        <h1> Bem-vindo usuário </h1>

      <a href="https://projeto-php.lucascambraia.repl.co/">
        teste </a>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    
  </body>
</html>