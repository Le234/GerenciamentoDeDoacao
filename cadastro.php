
<?php require_once ('cabecalho.php'); ?>

<div class="w3-container w3-margin-top">


    <h2 class="w3-center">Cadastro de Usuários</h2>
    <?php if ($msg): ?>
    <div class="w3-panel w3-green w3-padding"><?php echo $msg; ?></div><?php endif; ?>

    <form action="cadastroAction.php" name="formUsuarios" class="w3-container w3-card w3-padding" method="POST" onsubmit="return validarFormulario();">
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
        
        <button class="w3-button w3-black w3-center w3-margin-top" type="submit">Enviar</button>
    </form>
</div>

<script>
        function validarFormulario() {
            const nome = document.forms["formUsuarios"]["nome"].value;
            const cpf = document.forms["formUsuarios"]["cpf"].value;
            const cnpj = document.forms["formUsuarios"]["cnpj"].value;    
            const email = document.forms["formUsuarios"]["email"].value;
            const senha = document.forms["formUsuarios"]["senha"].value;
            const cidade = document.forms["formUsuarios"]["cidade"].value;
            const bairro = document.forms["formUsuarios"]["bairro"].value;
            const logradouro = document.forms["formUsuarios"]["logradouro"].value;
            const numero = document.forms["formUsuarios"]["numero"].value;
            const telefoneCelular = document.forms["formUsuarios"]["telefoneCelular"].value;
            const telefoneFixo = document.forms["formUsuarios"]["telefoneFixo"].value;
            const cep = document.forms["formUsuarios"]["cep"].value;

            if (cpf.length !== 11) {
                alert("O CPF deve ter 11 caracteres!");
                return false;
            }
            if (email.length < 5) {
                alert("O E-mail deve ter pelo menos 5 caracteres!");
                return false;
            }   
            return true;
        }
 </script>
<?php require_once ('rodape.php'); ?>