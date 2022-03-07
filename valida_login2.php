<?php 
session_start();
$usuarios_app = array (
    array('id' => 1,'email' => 'adm@teste.com', 'senha' => '123456','perfil' => 1),
    array('id' => 2,'email' => 'user@teste.com', 'senha' => 'abcd','perfil' => 1),
    array('id' => 3,'email' => 'jose@teste.com', 'senha' => '123456','perfil' => 2),
    array('id' => 4,'email' => 'maria@teste.com', 'senha' => '123456','perfil' => 2)
);

$usuarios_autenticado = false;
$usuarios_id = null;
$usuario_perfil = null;

foreach ($usuarios_app as $user){

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuarios_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil = $user['perfil'];
    }
}

if ($usuarios_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil'] = $usuario_perfil;
    header('location: home.php?');
} else{    
    $_SESSION['autenticado'] = 'NAO';
    header('location: index.php?login=erro');
}

?>