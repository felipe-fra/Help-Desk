<?php 
session_start();

//Tratando os dados recebidos
$titulo = str_replace('#', '-',$_POST['titulo']);
$categoria = str_replace('#', '-',$_POST['categoria']);
$descricao = str_replace('#', '-',$_POST['descricao']);
$texto = implode('#', $_POST). '#' . $_SESSION['id'] . PHP_EOL;

//Abrindo, gravando e fechando o arquivo com os dados recebidos
$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
header('location: abrir_chamado.php')
?>