
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
                    <li><a href="perfil.php">Usuário</a></li>
                    <li><a href="">Sobre</a></li>
                    <li class="log" id="botaoLogin"><a href="login.php">Login</a></li>
                </ul>
            </div>

        </div>
    </div>
    
    <div class="caixa-global">

        <div class="container">
        
            <div class="row">
                <div class="col col-login">
                    <form class="caixa-login" method="post" action="sessao.php?acao=login">
                        <div class="logo-login" >
                            <img src="logo/Cloud.png">
                        </div>

                                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro1') {?>

                                <p style="color:gold">Login inválido, tente outra vez!</p>

                                <?php } ?>

                                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') {?>

                                <p style="color:gold">Realize o login</p>

                                <?php } ?>

                        <div class="div-input">
                            <input name="matricula" type="number" placeholder="Matrícula">
                        </div>

                        <div class="div-input">
                            <input name="nome" type="text" placeholder="nome">
                        </div>

                        <div class="botao">
                            <button>Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        
        </div>

        <footer>
            <p>2021 &copy;Head Cloud All rights reserveds</p>
        </footer>
    </div>
</body>
</html>