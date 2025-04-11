
<?php require_once ('cabecalho.php'); ?>
<?php require_once ('conexao.php'); ?>
<div class="w3-container w3-margin-top">
        <h2 class="w3-center">Lista de Doações</h2>
        <table class="w3-table-all">
            <thead>
                <tr class="w3-black">
                    <th>ID</th>
                    <th>Usuário</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Tamanho</th>
                    <th>Status</th> 
                    <th>Ações</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM doacoes";

                $stmt = $conexao->query($sql);

                if ($stmt->num_rows > 0) {
                    while ($linha = $stmt->fetch_assoc()) {
                        // Escapando os valores para evitar XSS
                        $id_doacoes = htmlspecialchars($linha['id_doacoes']);
                        $id_usuario = htmlspecialchars($linha['id_usuario']);
                        $descricao = htmlspecialchars($linha['descricao']);
                        $quantidade = htmlspecialchars($linha['quantidade']);
                        $tamanho = htmlspecialchars($linha['tamanho']);
                        $status = htmlspecialchars($linha['status']);
                
       echo "<tr>
                <td>{$id_doacoes}</td>
                <td>{$id_usuario}</td>
                <td>{$descricao}</td>
                <td>{$quantidade}</td>
                <td>{$tamanho}</td>
                <td>{$status}</td>
                <td>";    
        
                    // Verifica o status e exibe o botão correspondente
                    if ($status === 'pendente') {
                        echo "<a href='obterDoacao.php?id_doacoes={$id_doacoes}' class='w3-button w3-green'>Obter Doação</a>";
                    } else {
                        echo "<button class='w3-button w3-gray' disabled>Doação Concluída</button>";
                    }

                    echo "</td>
                         </tr>";
                }
                    } else {
                        echo "<tr><td colspan='7'>Nenhuma doação cadastrada.</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php require_once ('rodape.php'); ?>