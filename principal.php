
<?php require_once ('cabecalho.php');?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-topright">
        <form action="logoutAction.php" class="w3-container" method='post'>
            <button name="btnLogout" class="w3-button w3-gray w3-cell w3-round-large w3-right w3-margin-right"> 
                <i class="w3-xxlarge fa fa-times-rectangle"> </i>Sair</button>
        </form>
</div>

<div class="w3-center">
            <br>
            <img src="img/logoDoacao.png" alt="Doacao" style="width:30%" class="w3-circle w3-margin-top">
        </div>

        <div class="w3-col w3-button w3-black w3-cell w3-round-large w3-margin-top w3-light" style="width:30%; height:100px;">
                <a href="doacoes.php" style="text-decoration: none;"> 
                    <i class=" fa fa-user-plus" ></i>
                    <p style="font-size: 2em ">Doar</p>
                </a>
            </div>
            <div class="w3-col w3-button w3-black w3-cell w3-round-large w3-margin-top w3-right" style="width:30%; height:100px;">
                <a href="listaDoacoes.php" style="text-decoration: none;"> 
                    <i class="fa fa-vcard-o" ></i> 
                    <p style="font-size: 2em">Doações</p>
                </a>
            <div>
        </div>
</div>


<?php require_once ('rodape.php'); ?>