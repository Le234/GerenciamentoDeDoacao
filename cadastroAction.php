
<?php require_once ('cabecalho.php'); ?>


<div class="w3-padding w3-content w3-center w3-text-grey w3-third w3-display-middle"> 
    <?php
        require_once 'conexao.php';
        $sql = "INSERT INTO usuarios (nome, cpf, cnpj, email, senha, cidade, bairro, logradouro, numero, telefoneCelular, telefoneFixo, cep)
        VALUES ('".$_POST['nome']."', '".$_POST['cpf']."', '".$_POST['cnpj']."', '".$_POST['email']."', '".$_POST['senha']."', '".$_POST['cidade']."', '".$_POST['bairro']."', '".$_POST['logradouro']."', '".$_POST['numero']."', '".$_POST['telefoneCelular']."', '".$_POST['telefoneFixo']."', '".$_POST['cep']."')";
     
        if ($conexao->query($sql) === TRUE)
        {
            echo '<a href="principal.php"><h1 class="w3-button w3-center w3-black">Cadastro salvo com sucesso!</h1></a> ';
        } 
        else 
        {
            echo '<a href="principal.php"><h1 class="w3-button w3-center w3-black">ERRO!</h1></a> ';
        }

        $conexao->close();
    ?>
</div>
 
<?php require_once ('rodape.php'); ?>