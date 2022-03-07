<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>App Help Desk</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav>

  <main class="container">    
    <div class="row">
      <div class="card-login">
        <div class="card">

          <header class="card-header">
            Login
          </header>

          <section class="card-body">
            <form action="valida_login2.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail" >
              </div>

              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>
                <!--Verifica se o houve uma tentativa de login frustada -->
              <?php if (isset($_GET ['login']) && $_GET ['login'] == 'erro') { ?>
                <div class="text-danger">
                  Usuário ou senha inválido (os).
                </div>
              <?php } ?> 
                <!--Verifica se o houve uma tentativa de acesso a área restrita sem login -->
              <?php if (isset($_GET ['login']) && $_GET ['login'] == 'erro2') { ?>
                <div class="text-danger">
                  Faça o login antes de acessar as páginas restritas.
                </div>
              <?php } ?> 

              <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
            </form>
          </section>

        </div>
      </div>
  </main>
  
</body>
</html>
