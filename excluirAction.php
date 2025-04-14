<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">

    <?php
        require_once 'conexao.php';
        $sql = "DELETE FROM usuarios WHERE id_usuario = '".$_POST['id_usuario'] ."';";
        if ($conexao->query($sql) === TRUE)
        {
            echo '<a href="listar.php"><h1 class="w3-button w3-center w3-black"> Excluido com sucesso! </h1></a> ';
        } 
        else 
        {
            echo '<a href="listar.php"><h1 class="w3-button w3-center w3-black">ERRO! </h1></a> ';
        }
        $conexao->close();
    ?>
</div>
<?php require_once 'rodape.php'; ?>


