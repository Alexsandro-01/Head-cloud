<?php

    $_GET['acao'] = 'alunos';

    require_once "validar_acesso.php";
    require_once "controller.php";

    if($_SESSION['id_adm'] != 2) {
        header('location: ');
    }

    $curso = strtolower($_GET['curso']); //convete para minusculo. o SQL acusou sensitive
/*
    echo '<pre>';
        print_r($alunos);
    echo '</pre>';
*/

$action = ''; 
?>


    <table>
    <thead>
        <tr>
            <th>Aluno</th>
            <th>Turma</th>
            <th>Nota</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($alunos as $key => $value) { ?>

            <tr>
                <td><?=$value->nome?></td>
                <td><?=$value->turma?></td>
                <td id="matricula_<?=$value->matricula?>_<?=$curso?>">
                    
                    <?=$value->$curso?>

                    <?php if(isset($value->$curso)) { ?>
                        <i disabled="disabled" class="fas fa-pen" style="color: grey"></i>
                    <?php } else { ?>
                        <i class="fas fa-pen" onclick="inserir('<?=$value->matricula?>', '<?=$curso?>', '<?=$action?>' )"></i>
                    <?php } ?>
                    
                </td>
            </tr>

        <?php } ?>
    </tbody>

</table>




