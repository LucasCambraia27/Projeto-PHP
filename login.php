<?php
session_start();

  // var_dump($_GET);

// $usuario = $_GET['loginUsuario'];
// $senha = $_GET['senhaUsuario'];

$usuario = $_POST['loginUsuario'];
$senha = $_POST['senhaUsuario'];

if ($usuario=="admin" && $senha=='Miguel27') {

  
  $_SESSION['logado'] = true;
 header('Location: https://Projeto-PHP.lucascambraia.repl.co/menu.php');
}else {
  session_destroy();
   header('Location: https://Projeto-PHP.lucascambraia.repl.co/teladelogin.php?erro=1');
}

?>