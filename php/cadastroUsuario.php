<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="../css/estilosCadastro.css">
	<script src="../Scripts/scriptsCadastroUsuario.js"></script>
        
</head>
<body>
<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["idA"]);
?>
<img src="../imagens/LogoSemShelter.png" onclick="window.location.href = '../php/menuPrincipal.php'" class="divLogo" title="Voltar">
<form action="../php/executarCadastroUsuario.php" method="post">
    <div class="divCadastro">
        <div class="divMensagemCadastro">  Cadastro </div>
        <input  type="text" placeholder="Nome de Usuário" minlength="4" maxlength="40" name="nomeUsuario" required > <br>

        <input  type="text" placeholder="Nome Completo" minlength="4" maxlength="60" name="nome" required > <br>

        <input  type="text" placeholder="E-mail" maxlength="60" name="email" 
        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
        title="E-mail inválido, exemplo: exemplo@exemplo.com" required > <br>

        <input  type="text" placeholder="CPF" maxlength="14" name="cpf" 
        pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
        title="CPF inválido, exemplo: 123.456.789-00" required > <br>

        <input id = "troca1" onclick="trocaDate1()" onblur="trocaText1()" max="2022-06-01" name="campoDataNasc" id="dataNasc" max="2022-01-01" min="1900-01-01"
        type="text" placeholder="Data de nascimento" required> <br>

        <input  type="password" placeholder="Senha" maxlength="40" name="senha" id="senha"
        pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{5,40}" 
        title="Senha entre 5 e 40 caracteres, com letra maiúscula, minúscula e número" required> <br>

        <input  type="password" placeholder="Confirmar Senha" maxlength="40" name="senha2" id="senha2"
        pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{5,40}" 
        title="Senha entre 5 e 40 caracteres, com letra maiúscula, minúscula e número" required> <br>

        <button name="Entrar"> Entrar </button>
    </div>
   

    
</form>
</body>

</html>
