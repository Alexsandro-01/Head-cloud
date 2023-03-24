<?php
    require_once "private/conexao.php";
    require_once "private/notas.php";
    require_once "private/service.php";

    if(isset($_GET['acao'])){

            $acao = $_GET['acao'];
            
        if($acao ==  'notas') {
            $nota = new Nota();
            $conexao = new Conexao();
            
            $service = new Service($conexao, $nota);
            
            $notas = $service->recuperar('notas');
        }
        elseif ($acao == 'alunos') {
            $conexao = new Conexao();
                
            $service = new Service($conexao, null);

            $alunos = $service->recuperar('alunos');
            
        }
        elseif ($acao == 'A') {
            $conexao = new Conexao();
                
            $service = new Service($conexao, null);

            $alunos = $service->recuperar($acao);
            
        }
        elseif ($acao == 'B') {
            $conexao = new Conexao();
                
            $service = new Service($conexao, null);

            $alunos = $service->recuperar($acao);
            
        }
        elseif ($acao == 'inserir') {
            $conexao = new Conexao();
            $nota = new Nota();
            $nota->__set('matricula', $_POST['matricula']);
            $nota->__set('curso', $_POST['curso']);
            $nota->__set('nota', $_POST['nota']);
            /*
            echo '<pre>';
            print_r($nota);
            echo '</pre>';
            */
            $service = new Service($conexao, $nota);
            $service->inserir();

            //echo $_POST['pagina'];

            
            if(isset($_POST['pagina']) && $_POST['pagina'] != '') {
                header('location: perfil.php?load=alunos_gestao&acao='.$_POST['pagina']);
            }
            else {
                header('location: perfil.php?load=alunos');

            }
            
        }
        else if ($acao == 'apagar') {
            $conexao = new Conexao();
            $nota = new Nota();

            $nota->__set('matricula', $_GET['matricula']);
            $nota->__set('curso', $_GET['curso']);
            $nota->__set('nota', null);

            $service = new Service($conexao, $nota);
            $service->inserir();

            header('location: perfil.php?load=alunos_gestao&acao='.$_GET['pag']);
            
        }
    }

?>