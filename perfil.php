<?php

require_once "validar_acesso.php";
require_once 'controller.php';


if(isset($_GET['acao'])) {
    $pagina = $_GET['acao'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Head Cloud</title>
    <link rel="shortcut icon" href="logo/Cloud-FivIcon.png" type="image/x-icon">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="private/script/script.js"></script>
    
</head>

<?php if(isset($_GET['load']) && $_GET['load'] == 'alunos') { ?>

    <body onload="ajax('alunos.php?curso=<?=$_SESSION['curso']?>')">
    
<?php } else if(isset($_GET['load']) && $_GET['load'] == 'alunos_gestao') { ?> 

    <body onload="ajax('alunos_gestao.php?acao=<?=$pagina?>')" >
    
<?php } else { ?>

    <body>

<?php }  ?>



<div class="nav-bar">
    <div class="nav-container">

        <div class="logo">
            <img src="logo/Cloud.png">
        </div>
        <div class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Cursos</a></li>
                <li><a href="">Contato</a></li>

                <li><a href="perfil.php"><?=$_SESSION['primeiroNome'][0]?></a></li>

                <li><a href="">Sobre</a></li>
                <li class="log" id="botaoLogin">

                    <?php if(isset($_SESSION['autenticado'])) { ?>

                        <a href="logoff.php">Sair</a>

                    <?php } else { ?>

                        <a href="login.php">Login</a>

                    <?php } ?>

                </li>
            </ul>
        </div>

    </div>
</div>

<div class="caixa-global">
    
    
        <div class="container">
        
            <div class="row">
                <div class="col" id="conteudo">
                    <div class="info aluno">
                        <div>
                            <h3>Bem vindo de volta</h3>

                            <p> <b class="alice">Nome:</b> <?=$_SESSION['nome']?></p>
                            <p> <b class="alice">Privilégio de Usuário:</b> <?=$_SESSION['privilegio']?></p>
                            <p> <b class="alice">Matricula:</b> <?=$_SESSION['matricula']?></p>

                            <p>
                                <?php if($_SESSION['privilegio'] == 'Aluno')  {?>
                                    
                                    <b class="alice">Turma:</b> <?=$_SESSION['turma']?>

                                <?php } else if($_SESSION['privilegio'] == 'Professor') {?>
                                    
                                    <b class="alice">Curso:</b> <?=$_SESSION['curso']?>
                                    
                                <?php } ?>
                            </p>
                        </div>

                        <div class="botao">
                                <?php if($_SESSION['privilegio'] == 'Aluno')  {?>
                                    
                                    <button id="botao" onclick="ajax('notas.php')">Notas</button>

                                <?php } else if($_SESSION['privilegio'] == 'Professor') {?>
                                    
                                    <button id="botao" onclick="ajax('alunos.php?curso=<?=$_SESSION['curso']?>')">Alunos</button>

                                <?php } else if($_SESSION['id_adm'] == 1 || $_SESSION['id_adm'] == 2) {?>
                                    
                                    <button id="botao" onclick="ajax('alunos_gestao.php?acao=alunos')">Todos alunos</button>
                                    <button id="botao" onclick="ajax('alunos_gestao.php?acao=A')">Turma A</button>
                                    <button id="botao" onclick="ajax('alunos_gestao.php?acao=B')">Turma B</button>
                                <?php } ?>

                        </div>
                    </div>

                    

                </div>
            </div>
        
        </div>

        <footer>
            <p>2021 &copy;Head Cloud All rights reserveds</p>
        </footer>
    </div>
</body>
</html>