<?php require_once "validador_acesso.php" ?>

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
      <div class="card-abrir-chamado">
        <div class="card">

          <header class="card-header">
            Abertura de chamado
          </header>

          <section class="card-body">
            <div class="row">
              <div class="col">

                <form method="post" action="registra_chamadp.php">
                  <div class="form-group">
                    <label>Título</label>
                    <input name="titulo" type="text" class="form-control" placeholder="Título">
                  </div>
                  
                  <div class="form-group">
                    <label>Categoria</label>
                    <select name="categoria" class="form-control">
                      <option>Criação Usuário</option>
                      <option>Impressora</option>
                      <option>Hardware</option>
                      <option>Software</option>
                      <option>Rede</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="descricao" class="form-control" rows="3"></textarea>
                  </div>

                  <div class="row mt-5">
                    <div class="col-6">
                      <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                    </div>
                    <div class="col-6">
                      <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                    </div>                  
                  </div>
                </form>

              </div>
            </div>
          </section>

        </div>
      </div>
    </div>  
  </main>  
</body>
</html>
