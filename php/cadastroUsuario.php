<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="../css/estilosCadastroUsuario.css">
	<script src="../Scripts/scriptsCadastroUsuario.js"></script>
        
</head>
<body>
<form action="../php/executarCadastroUsuario.php" method="post">
    <input  type="text" placeholder="Nome de Usuário" minlength="4" maxlength="40" name="nomeUsuario" required > <br>

    <input  type="text" placeholder="Nome Completo" minlength="4" maxlength="60" name="nome" required > <br>

    <input  type="text" placeholder="E-mail" maxlength="60" name="email" 
    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
    title="E-mail inválido, exemplo: exemplo@exemplo.com" required > <br>

    <input  type="text" placeholder="CPF" maxlength="14" name="cpf" 
    pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
    title="CPF inválido, exemplo: 123.456.789-00" required > <br>

    <input id = "troca1" onclick="trocaDate1()" onblur="trocaText1()" name="campoDataNasc" id="dataNasc" max="2022-01-01" min="1900-01-01"
    type="text" placeholder="Data de nascimento" required> <br>

    <input  type="password" placeholder="Senha" maxlength="40" name="senha" id="senha"
    pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,40}" 
    title="Senha entre 6 e 40 caracteres, com letra maiúscula, minúscula e número" required> <br>

    <input  type="password" placeholder="Confirmar Senha" maxlength="40" name="senha2" id="senha2"
    pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,40}" 
    title="Senha entre 6 e 40 caracteres, com letra maiúscula, minúscula e número" required> <br>

    <button> Entrar </button>
</form>
</body>

</html>