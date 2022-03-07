<?php require_once "validador_acesso.php" ?>

<?php
  //Recuperando dados
  $chamados = array();
  $arquivo = fopen('../../app_help_desk/arquivo.hd', 'r');


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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
  <title>App Help Desk</title>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          App Help Desk
        </a>
        <ul class="navbar-nav">
          <li class=" nav-item">
            <a class="nav-link" href="logoff.php">Sair</a>          
          </li>
        </ul>
      </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Chamado 
            </div>            
            <div class="card-body">             

                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title">Teste</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Impressora</h6>
                    <p class="card-text">bla bla  bla bla bla bbla</p>
                    <div class="form-group">
                      <label>Resposta</label>
                      <textarea name="descricao" class="form-control  " rows="3"></textarea>
                    </div>
                    <div>

                    </div> 

                  </div>
                  
                </div>

             

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-danger btn-block" href="home.php">Cancelar</a>
                </div>

                <div class="col-6">
                  <a class="btn btn-lg btn-success btn-block" href="home.php">Resolvido</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
</body>
</html>



<!--


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class=" nav-item">
          <a class="nav-link" href="logoff.php">Sair</a>          
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Chamado 
            </div>            
            <div class="card-body">             

                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title">Teste</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Impressora</h6>
                    <p class="card-text">bla bla  bla bla bla bbla</p>
                    <div class="form-group">
                      <label>Resposta</label>
                      <textarea name="descricao" class="form-control  " rows="3"></textarea>
                    </div>
                    <div>

                    </div> 

                  </div>
                  
                </div>

             

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-danger btn-block" href="home.php">Cancelar</a>
                </div>

                <div class="col-6">
                  <a class="btn btn-lg btn-success btn-block" href="home.php">Resolvido</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>