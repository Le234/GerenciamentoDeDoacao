
<?php require_once ('cabecalho.php');?>


    <nav class="w3-sidebar w3-bar-block w3-center w3-hide-small">
        <a href="principal.php" 
            class="w3-bar-item w3-button w3-padding-large w3-hover-gray  w3-text-black" >
            <i class="fa fa-home w3-xxlarge"></i>
            <p>INÍCIO</p>
        </a>
        <a href="sobre.php"
            class="w3-bar-item w3-button w3-padding-large w3-hover-gray  w3-text-black" >
            <i class="fa fa-info w3-xxlarge"></i>
            <p>SOBRE</p>
        </a>
        <a href="doacoes.php"
            class="w3-bar-item w3-button w3-padding-large w3-hover-gray w3-text-black" >
            <i class="fa fa-heart w3-xxlarge"></i>
            <p>DOAÇÔES</p>
        </a>
        <a href="doador.php"
            class="w3-bar-item w3-button w3-padding-large w3-hover-gray w3-text-black" >
            <i class="fa fa-handshake-o w3-xxlarge"></i>
            <p>DOADORES</p>
        </a>
        <a href="donatario.php"
            class="w3-bar-item w3-button w3-padding-large w3-hover-gray w3-text-black" >
            <i class="fa fa-handshake-o w3-xxlarge"></i>
            <p>DONATÁRIOS</p>
        </a>
        <a href="usuario.php"
            class="w3-bar-item w3-button w3-padding-large w3-hover-gray w3-text-black" >
            <i class="fa fa-user w3-xxlarge "></i>
            <p>USUÁRIOS</p>
        </a>
        <a href="transacao.php"
            class="w3-bar-item w3-button w3-padding-large w3-hover-gray w3-text-black" >
            <i class="fa fa-connectdevelop w3-xxlarge"></i>
            <p>TRANSAÇÕES</p>
        </a>
        <a href="contato.php"
            class="w3-bar-item w3-button w3-padding-large w3-hover-grayw3-hover-text-cyan w3-text-black" >
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p>CONTATO</p>
        </a>
    </nav>

<div class="w3-padding w3-content w3-third w3-margin w3-display-topright">
        <form action="logoutAction.php" class="w3-container" method='post'>
            <button class="w3-button w3-black w3-cell w3-round-large w3-right w3-margin-right;">
            <i class="fa fa-sign-out w3-xxlarge"></i>Sair</button>
        </form>
</div>



<div class="w3-display-container">
    <div class="w3-center w3-text-grey w3-display-topmiddle">
        <img src="img/logoDoacao.png" alt="Doacao" style="width: 60%;" class="w3-circle w3-margin-top">
    </div>
</div>



    
<div class="w3-content w3-center w3-display-bottommiddle" style="width: 100%; padding: 20px; display: flex; justify-content: center; gap: 40px;">

        
    <button class="w3-third w3-button w3-black w3-round-large w3-left" style="width: 40%; text-align: center;"> 
        <a href="doacoes.php" style="text-decoration: none;">
            <p style="font-size: 1.5em;">Doar</p>
        </a>
    </button>
    <button class="w3-third w3-button w3-black w3-round-large w3-right" style="width: 40%; text-align: center; ">
        <a href="listaDoacoes.php" style="text-decoration: none;">
            <p style="font-size: 1.5em;">Doações</p>
        </a>
    </button>

</div>




<?php require_once ('rodape.php'); ?>