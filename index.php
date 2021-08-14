<?php

//require_once "validar_acesso.php";

session_start();

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
</head>
<body>
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

                        <?php if(isset($_SESSION['primeiroNome'])) { ?>

                            <li><a href="perfil.php"><?=$_SESSION['primeiroNome'][0]?></a></li>

                        <?php } else { ?>

                            <li><a href="perfil.php">Usuário</a></li>
                        
                        <?php } ?>

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
        
                <div class="card">
                    <h1>HTML</h1>

                    <div class="logo-curso">
                        <img src="logo/html.png" width="100%">
                    </div>

                    <hr>
                    
                    <p>
                        Venha aprender HTML, uma linguagem de marcação
                        muito importante para a web. Aqui você vai aprender
                        tudo sobre como estruturar uma página web com qualidade
                        e da maneira mais atual.
                    </p>
                    
                    <hr>

                    <div class="botao">
                        <button>Ver mais</button>
                    </div>
                </div>

                <div class="card">
                    <h1>CSS</h1>

                    <div class="logo-curso">
                        <img src="logo/css.png" width="100%">
                    </div>

                    <hr>
                    
                    <p>
                        Aprenda CSS conosco e deixe suas páginas mais profissionais,
                        você vai aprender a estilizar seus sites e deixá-los atraentes
                        com as técnicas mais modernas do mercado.
                    </p>
                    
                    <hr>

                    <div class="botao">
                        <button>Ver mais</button>
                    </div>

                </div>

                <div class="card">
                    <h1>JAVASCRIPT</h1>

                    <div class="logo-curso">
                        <img src="logo/js.png" width="100%">
                    </div>

                    <hr>
                    
                    <p>
                        Uma das linguagens de programação mais versáteis do mercado,
                        o poderoso JavaScript permite, entre outras coisas, tornar suas 
                        páginas web muito mais interativas e poderosas.
                    </p>
                    
                    <hr>

                    <div class="botao">
                        <button>Ver mais</button>
                    </div>
                </div>

                <div class="card">
                    <h1>PHP</h1>

                    <div class="logo-curso">
                        <img src="logo/2196970-middle.png" width="100%">
                    </div>

                    <hr>
                    
                    <p>
                        PHP é a linguagem back-end mais usada na web até hoje,
                        com certeza não é por acaso. Aprenda conosco o poder e
                        a simplicidade dessa linguagem para os seus projetos.
                    </p>
                    
                    <hr>

                    <div class="botao">
                        <button>Ver mais</button>
                    </div>
                </div>
        
        </div>

        <footer>
            <p>2021 &copy;Head Cloud All rights reserveds</p>
        </footer>
    </div>
</body>
</html>