<?php
    //Token de validação
    $usuario_autenticado = false;

    //Usuarios do sistema
    $usuarios_app = array(
        array('email'=>'adm@teste.com.br', 'senha'=>'senhaadm'),
        array('email'=>'user@teste.com.br', 'senha'=>'senhauser'),
    );
    

    echo '<pre>';
    print_r($usuarios_app);
    echo '<pre>';
    
    foreach($usuarios_app as $user){

        if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']){
             $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado==true){
        echo 'Usuário autenticado!';
    }else{
        header('Location: index.php?login=error');
    }

?>