<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>
<?php require_once ('conexao.php'); ?>

<div class="w3-container w3-margin-top">
   <h2 class="w3-center">Cadastrar Doação</h2>

        <?php
        // Incluindo o arquivo de conexão
        include 'conexao.php';

        if (!$conexao) {
            die("Erro ao conectar ao banco de dados.");
        }

        $msg = "";

        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if ( !empty($_POST["id_usuario"]) && !empty($_POST["descricao"]) && !empty($_POST["quantidade"]) && !empty($_POST["tamanho"])) {
                
                // Coletando os dados do formulário
                $id_usuario = $_POST["id_usuario"];
                $descricao = $_POST["descricao"];
                $quantidade = $_POST["quantidade"];
                $tamanho = $_POST["tamanho"];

                // Query para inserir os dados na tabela doacoes
                $sql = "INSERT INTO doacoes ( id_usuario, descricao, quantidade, tamanho) 
                        VALUES (?, ?, ?, ?)";

                $stmt = $conexao->prepare($sql);

                if ($stmt) {
                    // Bind dos valores (s = string, i = integer)
                    $stmt->bind_param("isis", $id_usuario, $descricao, $quantidade, $tamanho);

                    // Executando a query
                    if ($stmt->execute()) {
                        $msg = "Doação cadastrada com sucesso!";
                    } else {
                        $msg = "Erro ao cadastrar a doação.";
                    }

                    $stmt->close();
                } else {
                    $msg = "Erro na preparação da query.";
                }
            } else {
                $msg = "Preencha todos os campos obrigatórios!";
            }
        }
        ?>

        <?php if (!empty($msg)): ?>
            <div class="w3-panel <?php echo strpos($msg, 'sucesso') !== false ? 'w3-green' : 'w3-red'; ?> w3-padding">
                <?php echo $msg; ?>
            </div>
        <?php endif; ?>


        <form class="w3-container w3-card w3-padding" method="POST">
            
            <label>Usuario</label>
            <input class="w3-input w3-border" type="number" name="id_usuario" required>

            <label>Descrição</label>
            <input class="w3-input w3-border" type="text" name="descricao" required>

            <label>Quantidade</label>
            <input class="w3-input w3-border" type="number" name="quantidade" required>

            <label>Tamanho</label>
            <input class="w3-input w3-border" type="text" name="tamanho" required>
        </form>
    
<div class="w3-display-container w3-center w3-margin-top">
    
        <button class="w3-button w3-black" type="submit">Salvar</button>
    
</div>
</div>


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
                    <th>Ações</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                // Query com JOIN para buscar os nomes dos usuários
                $sql = "SELECT * FROM doacoes";

                $stmt = $conexao->query($sql);

                if ($stmt->num_rows > 0) {
                    while ($linha = $stmt->fetch_assoc()) {
                        echo "<tr>
                                <td>{$linha['id_doacoes']}</td>
                                <td>{$linha['id_usuario']}</td>
                                <td>{$linha['descricao']}</td>
                                <td>{$linha['quantidade']}</td>
                                <td>{$linha['tamanho']}</td>
                                <td>
                                    <a href='obter_doacao.php?id={$linha['id']}' class='w3-button w3-green'>obter doacao</a>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Nenhuma doação cadastrada.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<?php require_once ('rodape.php'); ?>