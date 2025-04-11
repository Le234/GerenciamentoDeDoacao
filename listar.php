<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>

<?php include 'conexao.php'; ?>

<div class="w3-container w3-margin-top">
    <h2 class="w3-center">Lista de Usuários</h2> 
    <table class="w3-table-all">
        <thead>
        <tr class="w3-black">
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>CNPJ</th>
            <th>E-Mail</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM usuarios";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
            while ($linha = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>{$linha['id_usuario']}</td>
                        <td>{$linha['nome']}</td>
                        <td>{$linha['cpf']}</td>
                        <td>{$linha['cnpj']}</td>
                        <td>{$linha['email']}</td>
                        <td>
                            <a href='atualizar.php?id_usuario={$linha['id_usuario']}' class='w3-button w3-blue'>Editar</a>
                            <a href='excluir.php?id_usuario={$linha['id_usuario']}' class='w3-button w3-red'>Excluir</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Nenhum usuario cadastrado.</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<?php require_once ('rodape.php'); ?>

