<?php
    require_once "validar_acesso.php";
    require_once "controller.php";


    if($_SESSION['id_adm'] != 1) {
        header('location: ');
    }

/*
    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';
*/
    $action = $_GET['acao'];
?>

<table>
        <thead>
            <tr>
                <th>Aluno</th>
                <th>Turma</th>
                <th>HTML</th>
                <th>CSS</th>
                <th>JS</th>
                <th>PHP</th>

                
            </tr>
        </thead>

    <tbody>
        <?php foreach($alunos as $key => $value) { ?>

            <tr>
                <td><?=$value->nome?></td>
                <td><?=$value->turma?></td>
                <td id="matricula_<?=$value->matricula?>_html">

                    <?=$value->html?>
                    <div class="div-i">
                        <i class="fas fa-edit" onclick="inserir('<?=$value->matricula?>', 'html', '<?=$action?>' )"></i>
                        <i class="fas fa-trash" onclick="apagar('<?=$value->matricula?>', 'html', '<?=$action?>' )"></i>
                    </div>

                </td>
                <td id="matricula_<?=$value->matricula?>_css">

                    <?=$value->css?>
                    <div class="div-i">
                        <i class="fas fa-edit" onclick="inserir('<?=$value->matricula?>', 'css', '<?=$action?>' )"></i>
                        <i class="fas fa-trash" onclick="apagar('<?=$value->matricula?>', 'css', '<?=$action?>' )"></i>
                    </div>

                </td>
                <td id="matricula_<?=$value->matricula?>_javascript">

                    <?=$value->javascript?>
                    <div class="div-i">
                        <i class="fas fa-edit" onclick="inserir('<?=$value->matricula?>', 'javascript', '<?=$action?>' )"></i>
                        <i class="fas fa-trash" onclick="apagar('<?=$value->matricula?>', 'javascript', '<?=$action?>' )"></i>
                    </div>

                </td>
               
                <td id="matricula_<?=$value->matricula?>_php">

                    <?=$value->php?>
                    <div class="div-i">
                        <i class="fas fa-edit" onclick="inserir('<?=$value->matricula?>', 'php', '<?=$action?>' )"></i>
                        <i class="fas fa-trash" onclick="apagar('<?=$value->matricula?>', 'php', '<?=$action?>' )"></i>
                    </div>
                   
                </td>

            </tr>

        <?php } ?>
    </tbody>

</table>

    
