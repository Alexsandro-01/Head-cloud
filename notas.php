    <?php
        $_GET['acao'] = 'notas';

        require_once "validar_acesso.php";
        require_once "controller.php";
    ?>

    <table>
        <thead>
            <tr>
                <th>HTML</th>
                <th>CSS</th>
                <th>JavaScript</th>
                <th>PHP</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><?=$notas[0]->html?></td>
                <td><?=$notas[0]->css?></td>
                <td><?=$notas[0]->javascript?></td>
                <td><?=$notas[0]->php?></td>
            </tr>
        </tbody>

    </table>
