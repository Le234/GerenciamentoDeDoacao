
<?php require_once ('cabecalho.php');?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-topright">
        <form action="logoutAction.php" class="w3-container" method='post'>
            <button name="btnLogout" class="w3-button w3-red w3-cell w3-round-large w3-right w3-margin-right"> 
                <i class="w3-xxlarge fa fa-times-rectangle"> </i> Logout
            </button>
        </form>
</div>

<div class="w3-padding w3-text-grey w3-half w3-display-middle w3-center">
        <h1 class="w3-center w3-black w3-round-large w3-margin">Doações</h1>
        <div class="w3-row">
            <div class="w3-col w3-button w3-black w3-cell w3-round-large" style="width:45%;">
                <a href="doacoes.php" style="text-decoration: none;"> 
                    <i class=" fa fa-user-plus" style="font-size: 10.5em"></i>
                    <p style="font-size: 2em">Doar</p>
                </a>
            </div>
            <div class="w3-col w3-button w3-black w3-cell w3-round-large w3-right" style="width:45%;">
                <a href="listaDoacoes.php" style="text-decoration: none;"> 
                    <i class="fa fa-vcard-o" style="font-size: 10.5em"></i> 
                    <p style="font-size: 2em">Listar de Doações</p>
                </a>
            <div>
        </div>
</div>


<?php require_once ('rodape.php'); ?>