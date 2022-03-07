<?php 
session_start();
if (!$_SESSION['autenticado'] || $_SESSION['autenticado'] != 'SIM'){
  header('location: index.php?login=erro2');
}
?>