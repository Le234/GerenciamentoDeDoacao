<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>
<?php require_once ('conexao.php'); ?>  

<a href="principal.php" class="w3-display-topmiddle w3-red w3-center w3-padding w3-button" style="text-decoration:none; ">
    <i class="fa fa-ban" style="font-size:5em"></i>
    <p style="font-weight:bold;">CANCELAR EXCLUSÃO</p>     
</a> 
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <h1 class="w3-center w3-black w3-round-large w3-margin">EXLUIR - ID: <?php echo " ".$_GET['id_usuario']?> </h1>

    <form action="excluirAction.php" class="w3-container w3-center" method='post'>
        <input name="id_usuario" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id_usuario']?>">
    
        <button type="submit" class="w3-button w3-black w3-cell w3-round-large w3-right">     
            <i class="w3-xxlarge fa fa-check"></i> Confirmar Exclusão.</button>
    </form>
</div>


<?php require_once ('rodape.php'); 



    
