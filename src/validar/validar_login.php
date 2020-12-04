<?php
    //Variável de autenticação
    $usuario_autenticado = false;

    //Usuários Cadastrados (hard code)
    $usuarios_cad = array(
        //2 usuários
        array(
            'email' => 'teste@gmail.com',
            'senha' => '123abc'
        ),
        array(
            'email' => 'adm@gmail.com',
            'senha' => 'adm'
        )
    );

    //Verificar se existe os dados
    foreach($usuarios_cad as $usuarios) {
        if ($usuarios['email'] == $_POST['email'] && $usuarios['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado == true) {
        echo 'Ok';
    }else {
        header('Location: ../index.php?login=erro');
    }

?>