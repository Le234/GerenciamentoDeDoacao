<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id = $id";
    if ($conexao->query($sql) === TRUE) {
        header("Location: index.php?msg=Registro excluído com sucesso!");
    }
    else {
        header("Location: index.php?msg=Erro ao excluir o registro.");
    }
}else {
    header("Location: index.php");
    }
?>
<?php

include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cnpj = $_POST['cnpj'];

    $sql = "UPDATE usuarios SET nome = '$nome', cpf = '$cpf', cnpj = '$cnpj' WHERE id = $id";
    if ($conexao->query($sql) === TRUE) {
        header("Location: index.php?msg=Registro atualizado com sucesso!");
    } else {
        echo "Erro ao atualizar: " . $conexao->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = $conexao->query($sql);
    $usuario = $resultado->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container w3-margin-top">
    <h2>Editar Usuário</h2>
    <form class="w3-container" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <label>Nome</label>
        <input class="w3-input w3-border" type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required>
        <label>CPF</label>
        <input class="w3-input w3-border" type="text" name="cpf" value="<?php echo $usuario['cpf']; ?>" required>
        <label>CNPJ</label>
        <input class="w3-input w3-border" type="text" name="creci" value="<?php echo $usuario['cnpj']; ?>" required>
        <button class="w3-button w3-teal w3-margin-top" type="submit">Salvar</button>
    </form>
</div>
</body>
</html>
