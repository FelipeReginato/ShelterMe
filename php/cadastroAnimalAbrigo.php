<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="../css/estilosPaginaAnimalAbrigo.css">
	
        
</head>
<body>

<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["idA"]);
?>
<div onclick="window.location.href = 'paginaPrincipal.php'" class="divLogo"></div>
<div class="divCadastro"> Cadastrar Animal</div>
    <script>
    function trocaDate2() {
        document.getElementById('troca2').type = 'date';
    }  
    function trocaText2(){
    document.getElementById('troca2').type = 'text';
    }
    </script>
<div class="divCampo">
<form action="../php/executarCadastroAnimalAbrigo.php" method="post">

<input name="campoNome" type="text" placeholder="Nome do Animal" minlength="3" maxlength="60" required>

<input name="campoPeso" type="text" placeholder="Peso (Opcional)" maxlength="20">

<input name="campoEstado" type="text" placeholder="Estado" maxlength="30" 
pattern="[a-zA-ZÀ-ž\s]{5,30}" title="Estado entre 5 e 30 letras" required>

<input id = "troca2" onclick="trocaDate2()" onblur="trocaText2()" max="2022-06-01" name="campoDataEncontro" type="text" placeholder="Data de encontro" maxlength="50">

<input name="campoCidade" type="text" placeholder="Cidade" maxlength="40"
pattern="[a-zA-ZÀ-ž\s]{5,40}" title="Cidade entre 5 e 40 letras" required>
                
<input name="campoEndereco" type="text" placeholder="Endereço" minlenght="8" maxlength="50" required>

<div class="divSelect">
    <label for="selectEspecie">Espécie do Animal:</label>
        <select name="campoEspecie" id="selectEspecie" required>
            <option></option>
            <option value="Cachorro">Cachorro</option>
            <option value="Gato">Gato</option>
            <option value="Passáro">Passáro</option>
        </select>
</div>

<div class="divSelect">
    <label for="selectRaca">Raça do Animal:</label>
        <select name="campoRaca" id="selectRaca" required>
            <option></option>
            <option value="teste">Teste</option>
        </select>
</div>

<div class="divSelect">
    <label for="selectCor">Cor do Animal:</label>
        <select name="campoCor" id="selectCor" required>
            <option></option>
            <option value="Amarelo">Amarelo</option>
            <option value="Azul">Azul</option>
            <option value="Branco">Branco</option>
            <option value="Caramelo">Caramelo</option>
            <option value="Colorido">Colorido</option>  
            <option value="Preto">Preto</option>
            <option value="Marrom">Marrom</option>
            <option value="Verde">Verde</option>
                       
        </select>
</div>

<div class="divSelect">
    <label for="selectIdade">Idade do Animal:</label>
        <select name="campoIdade" id="selectIdade" required>
            <option></option>
            <option value="Idoso">Idoso</option>
            <option value="Adulto">Adulto</option>
            <option value="Filhote">Filhote</option>
        </select>
</div>

<div class="divSelect">
    <label for="selectSexo">Sexo do animal:</label>
        <select name="campoSexo" id="selectSexo" required>
            <option></option>
            <option value="Macho">Macho</option>
            <option value="Fêmea">Fêmea</option>
            <option value="Desconhecido">Não Sei</option>
        </select>
</div>

<div class="divSelect">
    <label for="selectPorte">Porte do Animal:</label>
        <select name="campoPorte" id="selectPorte" required>
            <option></option>
            <option value="Grande">Grande</option>
            <option value="Médio">Médio</option>
            <option value="Pequeno">Pequeno</option>
        </select>
</div>




<button class="botaoEnviar">Criar postagem</button>
</form>
</div>

</body>

</html>