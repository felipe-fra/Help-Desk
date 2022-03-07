<?php require_once "validador_acesso.php" ?>

<?php
  //Recuperando dados
  $chamados = array();
  $arquivo = fopen('arquivos/arquivo.hd', 'r'); 

  while (!feof($arquivo)){

      $registro = fgets($arquivo);
      $valida_chamado = explode('#',$registro);  
      
      if($_SESSION ['perfil'] == 2) {      
        if($_SESSION['id'] != $valida_chamado[3]) {
          continue;      
        }else {
          $chamados[] = $registro;
        }

      } else{
        $chamados[] = $registro;
      }
  }
  fclose($arquivo);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Help Desk</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo App Help Desk">
        App Help Desk
    </a>
    <ul class="navbar-nav">
      <li class=" nav-item">
        <a class="nav-link" href="logoff.php">Sair</a>          
      </li>
    </ul>
  </nav>

  <main class="container">    
    <div class="row">
      <div class="card-consultar-chamado">
        <div class="card">

          <header class="card-header">
            Consulta de chamado
          </header>
          
          <section class="card-body">            
            <!-- Criando os cards de acordo com a quantidade de Registros disponiveis-->
            <?php foreach ($chamados as $chamado) { ?>

              <?php 
                // tratando os Registros recuperados para exibi-los na aplicação
                $chamado_dados = explode('#',$chamado); 
                if(count($chamado_dados)< 3) {
                  continue;
                }              
              ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$chamado_dados[0]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[1]?></h6>
                  <p class="card-text"><?=$chamado_dados[2]?></p>
                </div>
              </div>

            <?php } ?>

            <div class="row mt-5">
              <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </main>  
</body>
</html>


