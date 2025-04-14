<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" >
    <?php
       require_once 'conexao.php';
      
       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_usuario = $_POST['id_usuario'];
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
    
        $sql = "UPDATE usuarios SET nome = '$nome', cpf = '$cpf', cnpj = '$cnpj', email = '$email', senha = '$senha', 
        cidade = '$cidade', bairro = '$bairro', logradouro = '$logradouro', numero = '$numero', telefoneCelular = '$telefoneCelular', 
        telefoneFixo = '$telefoneFixo', cep= '$cep' WHERE id_usuario = $id_usuario";
    
        if ($conexao->query($sql) === TRUE) {
            echo '
            <a href="listar.php">
                <h1 class="w3-button w3-black">Cadastro atualizado com sucesso! </h1>
            </a> 
            ';
        $id = mysqli_insert_id($conexao);
            
        } else {
            echo '
            <a href="listar.php">
                <h1 class="w3-button w3-black">ERRO! </h1>
            </a> 
            ';
        }
        $conexao->close();
    }
    ?>
</div>
<?php require_once ('rodape.php'); ?>