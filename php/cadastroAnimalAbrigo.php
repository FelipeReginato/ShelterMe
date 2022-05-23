<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="../css/estiloPaginaAnimal.css">
	
        
</head>
<body>
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
        </select>
</div>

<div class="divSelect">
    <label for="selectPorte">Porte do Animal:</label>
        <select name="campoPorte" id="selectPorte" required>
            <option></option>
            <option value="Cachorro">Grande</option>
            <option value="Gato">Médio</option>
            <option value="Passáro">Pequeno</option>
        </select>
</div>

<div class="divSelect">
    <label for="selectIdade">Idade do Animal:</label>
        <select name="campoIdade" id="selectIdade" required>
            <option></option>
            <option value="Cachorro">Idoso</option>
            <option value="Gato">Adulto</option>
            <option value="Passáro">Filhote</option>
        </select>
</div>
<input id = "troca2" onclick="trocaDate2()" onblur="trocaText2()" name="campoDataEncontro" type="text" placeholder="Data de encontro" maxlength="50">

<input name="campoEstado" type="text" placeholder="Estado" maxlength="30" 
pattern="[a-zA-Z]{5,30}" title="Estado entre 5 e 30 letras" required>

<input name="campoCidade" type="text" placeholder="Cidade" maxlength="40"
pattern="[a-zA-Z]{5,40}" title="Cidade entre 5 e 40 letras" required>
                
<input name="campoEndereco" type="text" placeholder="Endereço" minlenght="8" maxlength="50" required>

<input name="campoPeso" type="text" placeholder="Peso (Opcional)" maxlength="20">

<button class="botaoEnviar">Enviar dados</button>
</form>
</div>

</body>

</html>