
<?php require_once('cabecalho.php'); ?>
<?php require_once('conexao.php'); ?>



<div class="w3-container w3-center w3-margin-top">
    
<?php
// Verifica se o parâmetro id_doacoes foi enviado via GET
if (isset($_GET['id_doacoes'])) {
    $id_doacoes = $_GET['id_doacoes'];

    // Consulta segura usando prepared statements
    $sql = "SELECT * FROM doacoes WHERE id_doacoes = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id_doacoes); // "i" indica que o parâmetro é um inteiro
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Verifica se a consulta retornou um registro
    if ($resultado->num_rows === 1) {
        $doacao = $resultado->fetch_assoc(); // Armazena o registro na variável $doacao
    } else {
        die("Erro: Doação não encontrada.");
    }

    $stmt->close();
} else {
    $sql = "SELECT * FROM doacoes ORDER BY id_doacoes DESC LIMIT 1"; // Exemplo: obtém o último registro
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows === 1) {
        $doacao = $resultado->fetch_assoc();
        $id_doacoes = $doacao['id_doacoes']; // Define o id_doacoes com base na consulta
    } else {
        die("Erro: Nenhuma doação encontrada.");
    }
}
?>
<h2>Solicitar Doação</h2>
<form class="w3-container" method="POST" action="donatario.php">

    <input type="hidden" name="id_doacoes" value="<?php echo htmlspecialchars($id_doacoes); ?>">
    <input  type="hidden" name="descricao" value="<?php echo $doacao['descricao']; ?>">
    <input  type="hidden" name="quantidade" value="<?php echo $doacao['quantidade']; ?>">
    <input  type="hidden" name="tamanho" value="<?php echo $doacao['tamanho']; ?>">
    
    <button class="w3-button w3-black w3-center w3-margin-top" type="submit">Salvar</button>

</form>

</div>

<?php require_once('rodape.php'); ?>
