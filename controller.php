<?php
    require_once "validar_acesso.php";

    if(isset($_POST['matricula'])){
        $_POST['matricula'] = (int)$_POST['matricula'];
    }
    
    require_once "private/controller_private.php";

?>