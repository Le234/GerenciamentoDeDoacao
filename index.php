<?php
include 'conexao.php';

$msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $telefoneCelular = $_POST['telefoneCelular'];
    $telefoneFixo = $_POST['telefoneFixo'];
    $cep = $_POST['cep'];




    if (strlen($cpf) === 11 ) {
        $sql = "INSERT INTO usuarios ( nome, cpf, cnpj, email, senha, cidade, bairro, logradouro, numero, telefoneCelular, telefoneFixo, cep ) VALUES ('$nome', '$cpf', '$cnpj', '$email', '$senha', '$cidade', '$bairro', '$logradouro', '$numero', '$telefoneCelular', '$telefoneFixo', '$cep' )";
        if ($conexao->query($sql) === TRUE) {
            $msg = "Cadastro realizado com sucesso!";
        } else {
            $msg = "Erro ao cadastrar: " . $conexao->error;
        }
        
    }else {
        $msg = "Validação falhou! Verifique os dados.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <script>
        function validarFormulario() {
            const cpf = document.forms["formUsuarios"]["cpf"].value;

            if (cpf.length !== 11) {
                alert("O CPF deve ter 11 caracteres!");
                return false;
            }
            return true;
        }
    </script>

</head>


<body>
<div class="w3-container w3-margin-top">
    <h2 class="w3-center">Cadastro de Usuários</h2>
    <?php if ($msg): ?>
        <div class="w3-panel w3-green w3-padding"><?php echo $msg; ?></div>
    <?php endif; ?>

    <form name="formUsuarios" class="w3-container w3-card w3-padding" method="POST" onsubmit="return validarFormulario();">
        <label>Nome</label>
        <input class="w3-input w3-border" type="text" name="nome" required>
        <label>CPF</label>
        <input class="w3-input w3-border" type="text" name="cpf" required>
        <label>CNPJ</label>
        <input class="w3-input w3-border" type="text" name="cnpj" required>
        <label>E-MAIL</label>
        <input class="w3-input w3-border" type="text" name="email" required>
        <label>SENHA</label>
        <input class="w3-input w3-border" type="text" name="senha" required>
        <label>CIDADE</label>
        <input class="w3-input w3-border" type="text" name="cidade" required>
        <label>BAIRRO</label>
        <input class="w3-input w3-border" type="text" name="bairro" required>
        <label>LOGRADOURO</label>
        <input class="w3-input w3-border" type="text" name="logradouro" required>
        <label>NUMERO</label>
        <input class="w3-input w3-border" type="text" name="numero" required>
        <label>TELEFONE CELULAR</label>
        <input class="w3-input w3-border" type="text" name="telefoneCelular" required>
        <label>TELEFONE FIXO</label>
        <input class="w3-input w3-border" type="text" name="telefoneFixo" required>
        <label>CEP</label>
        <input class="w3-input w3-border" type="text" name="cep" required>
        
        <button class="w3-button w3-black w3-margin-top" type="submit">Enviar</button>
    </form>


</div>

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
                        <td>{$linha['id']}</td>
                        <td>{$linha['nome']}</td>
                        <td>{$linha['cpf']}</td>
                        <td>{$linha['cnpj']}</td>
                        <td>{$linha['email']}</td>
                        <td>
                            <a href='editar.php?id={$linha['id']}' class='w3-button w3-blue'>Editar</a>
                            <a href='excluir.php?id={$linha['id']}' class='w3-button w3-red'>Excluir</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum corretor cadastrado.</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
