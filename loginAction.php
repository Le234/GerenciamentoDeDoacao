<?php require_once ('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" >
    <?php
    session_start();    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $id_usuario = $_POST['id_usuario'];
       require_once 'conexao.php';
       $sql = "SELECT * FROM usuarios WHERE nome =  '".$nome."';";
       $resultado = $conexao->query($sql);
       //echo $sql;
       $linha = mysqli_fetch_array($resultado);
       if($linha != null)
        {
            if($linha['senha'] == $senha)
            {
                echo '
                <a href="principal.php">
                    <h1 class="w3-button w3-teal">'.$nome.', Seja Bem-Vinda! </h1>
                </a> 
                ';
                $_SESSION['logado'] = $nome;
                $_SESSION['id_usuario'] = $id_usuario;

            }
            else
            {
                echo '
                <a href="index.php">
                <h1 class="w3-button w3-teal">Login Inválido! </h1>';
                
            }
        }
        else
        {
            
            echo '</a> 
            <a href="index.php">
                <h1 class="w3-button w3-teal">Login Inválido! </h1>
            </a> 
            ';
        }
        $conexao->close();
    ?>
</div>
<?php require_once ('rodape.php'); ?>