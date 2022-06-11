<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="../css/estilosCadastroAbrigo.css">
	
        
</head>
<body>
<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["idA"]);
?>
<img src="../imagens/ShelterMELogoAbrigo.png" onclick="window.location.href = '../php/menuPrincipal.php'" class="divLogo" title="Voltar">
<form action="../php/executarCadastroAbrigo.php" method="post">
<div class="divCadastro">
<div class="divMensagemCadastro">  Cadastro </div>
    <input  type="text" placeholder="Nome do Abrigo" minlength="4" maxlength="60" name="nome" required > <br>

    <input  type="text" placeholder="E-mail" maxlength="60" name="email" 
    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
    title="E-mail inválido, exemplo: exemplo@exemplo.com" required > <br>

    <input  type="text" placeholder="CNPJ" maxlength="18" name="cnpj" 
    pattern="\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}"
    title="CNPJ inválido, exemplo: XX.XXX.XXX/XXXX-XX" required > <br>

	<input name="campoEstado" type="text" placeholder="Estado" maxlength="30" 
    pattern="[a-zA-Z]{5,30}" title="Estado entre 5 e 30 letras" required> <br>

	<input name="campoCidade" type="text" placeholder="Cidade" maxlength="40" pattern="[a-zA-Z]{5,40}" title="Cidade entre 5 e 40 letras" required> <br>
	
    <input name="campoEndereco" type="text" placeholder="Endereço do abrigo" minlenght="8" maxlength="50" required> <br>

    <input  type="password" placeholder="Senha" maxlength="40" name="senha" id="senha"
    pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,40}" 
    title="Senha entre 6 e 40 caracteres, com letra maiúscula, minúscula e número" required> <br>

    <input  type="password" placeholder="Confirmar Senha" maxlength="40" name="senha2" id="senha2"
    pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,40}" 
    title="Senha entre 6 e 40 caracteres, com letra maiúscula, minúscula e número" required> <br>

    <button> Entrar </button>
    </div>
</form>
</div>
</body>

</html>