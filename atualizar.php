<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>

<div class="w3-container w3-margin-top">
    <h2>Editar Usuários</h2>
    <form class="w3-container" method="POST">
        <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuario']; ?>">
        <label>Nome</label>
        <input class="w3-input w3-border" type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required>
        <label>CPF</label>
        <input class="w3-input w3-border" type="text" name="cpf" value="<?php echo $usuario['cpf']; ?>" required>
        <label>CNPJ</label>
        <input class="w3-input w3-border" type="text" name="cnpj" value="<?php echo $usuario['cnpj']; ?>" required>
        <label>EMAIL</label>
        <input class="w3-input w3-border" type="text" name="email" value="<?php echo $usuario['email']; ?>" required>
        <label>SENHA</label>
        <input class="w3-input w3-border" type="text" name="senha" value="<?php echo $usuario['senha']; ?>" required>
        <label>CIDADE</label>
        <input class="w3-input w3-border" type="text" name="cidade" value="<?php echo $usuario['cidade']; ?>" required>
        <label>BAIRRO</label>
        <input class="w3-input w3-border" type="text" name="bairro" value="<?php echo $usuario['bairro']; ?>" required>
        <label>LOGRADOURO</label>
        <input class="w3-input w3-border" type="text" name="logradouro" value="<?php echo $usuario['logradouro']; ?>" required>
        <label>NUMERO</label>
        <input class="w3-input w3-border" type="text" name="numero" value="<?php echo $usuario['numero']; ?>" required>
        <label>TELEFONE CELULAR</label>
        <input class="w3-input w3-border" type="text" name="telefoneCelular" value="<?php echo $usuario['telefoneCelular']; ?>" required>
        <label>TELEFONE FIXO</label>
        <input class="w3-input w3-border" type="text" name="telefoneFixo" value="<?php echo $usuario['telefoneFixo']; ?>" required>
        <label>CEP</label>
        <input class="w3-input w3-border" type="text" name="cep" value="<?php echo $usuario['cep']; ?>" required>
        <button class="w3-button w3-teal w3-margin-top" type="submit">Salvar</button>
    </form>
</div>       
<?php require_once ('rodape.php'); ?>
