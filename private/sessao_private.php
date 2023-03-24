<?php

require_once "private/conexao.php";
require_once "private/service.php";



if($_GET['acao'] == 'login') {

    $conexao = new Conexao();
    $service = new Service($conexao, null, null);

    $dados = $service->recuperar('login', null);

    
    if($dados) {

        session_start();

        $_SESSION['nome'] = $dados[0]->nome;
        $_SESSION['privilegio'] = $dados[0]->privilegio;
        $_SESSION['turma'] = $dados[0]->turma;
        $_SESSION['matricula'] = $dados[0]->matricula;
        $_SESSION['curso'] = $dados[0]->curso;
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id_adm'] = $dados[0]->id_adm;

        $primeiroNome = explode(' ', $_SESSION['nome']);

        $_SESSION['primeiroNome'] = $primeiroNome;

        header('location: perfil.php');

    } else {
        header('location: login.php?login=erro1');
    }
}

/*
    echo '<pre>';
        print_r($dados);
    echo '</pre>';
*/

?>