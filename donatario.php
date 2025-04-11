<?php require_once ('cabecalho.php'); ?>
<?php
require_once 'conexao.php';
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id_usuario'])) {
    die("Acesso negado. Faça login.");
}


$id_usuario = $_SESSION['id_usuario'];
$id_doacoes = $_POST['id_doacoes'] ?? null;

if (!$id_doacoes) {
    die("❌ ID da doação não foi enviado.");
}
    // Buscar os dados da doação original
    $sql = "SELECT descricao, quantidade, tamanho FROM doacoes WHERE id_doacoes = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id_doacoes);
    $stmt->execute();
    $resultado = $stmt->get_result();

if ($resultado->num_rows === 1)
    {
        $dados = $resultado->fetch_assoc();
       

        // Inserir na tabela donatario
        $sql_insert = "INSERT INTO donatario (id_usuario, id_doacoes, descricao, quantidade, tamanho)
                       VALUES (?, ?, ?, ?, ?)";
        $insert = $conexao->prepare($sql_insert);
        $insert->bind_param("sssss", $id_usuario, $id_doacoes, $dados['descricao'], $dados['quantidade'], $dados['tamanho']);

        if ($insert->execute()) 
        {
            echo "✅ Doação recebida com sucesso!";

                    // Atualizar o status da doação na tabela doacoes
            $sql_update = "UPDATE doacoes SET status = 'concluido' WHERE id_doacoes = ?";
            $update_stmt = $conexao->prepare($sql_update);
            $update_stmt->bind_param("i", $id_doacoes);

            if ($update_stmt->execute()) {
                echo "<br>✅ Status da doação atualizado para 'concluído' com sucesso!";
            } else {
                echo "<br>❌ Erro ao atualizar o status da doação: " . $update_stmt->error;
            }

            $update_stmt->close();
                    } else {
            echo "❌ Erro ao registrar recebimento: " . $insert->error;
        }

        $insert->close();

        $stmt->close();

        $conexao->close();
    }
?>
<br>
<a href="listaDoacoes.php">Voltar</a>
<?php require_once ('rodape.php'); ?>
