<?php require_once ('cabecalho.php'); ?>

<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4  w3-third" style="width:auto;">

        <div class="w3-center">
            <br>
            <img src="img/gabi.jpg" alt="Gabi" style="width:40%" class="w3-circle w3-margin-top">
        </div>

        <form class="w3-container " action="loginAction.php" method="post">
            <div class="w3-section">
                <label style="font-weight: bold;">Usuário</label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite o nome" name="nome" required>
                <label style="font-weight: bold;">Senha</label>
                <input class="w3-input w3-border" type="text" placeholder="Digite a Senha" name="senha" required>
                <label style="font-weight: bold;">ID</label>
                <input class="w3-input w3-border" type="text" placeholder="Digite o ID" name="id_usuario" required>
                
                <button class="w3-button w3-block w3-black w3-section w3-padding" type="submit">Entrar</button>
            </div>
            <div class="w3-section w3-center">
                <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
                <p>Esqueceu a senha? <a href="recuperarSenha.php">Recuperar Senha</a></p>
        </form>
        <br>
    
    </div>

<?php require_once ('rodape.php'); ?>