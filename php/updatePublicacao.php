<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <link rel="stylesheet" href="../css/estiloUpdtPubl.css">
        <script src="../Scripts/scriptsPaginaAnimal.js"></script>
</head>
<body>
<?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$id = $_POST['id'];
$idU = $_POST['idU'];

$result = mysqli_query($conn,"SELECT * FROM animal WHERE CodAnimal = $id");
$resultU = mysqli_query($conn,"SELECT * FROM usuario WHERE CodUsuario = $idU");
$row = mysqli_fetch_assoc($result);
$rowU = mysqli_fetch_assoc($resultU);

?>

<script>
    function validarUpdate(){
        let confirma = confirm("Você deseja mesmo atualizar a publicação de <?php echo $row["Nome"]; ?>");
        if (confirma){
            return true;
        }else{
            return false;
        }
}
        
</script>

<div class="divAtualizar">Atualizar Dados</div>
<div class="divCampo">
<form action="executarUpdate.php" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>">

<input type="hidden" name="idU" value="<?php echo $idU; ?>">

<input class="inputEmail" type="text" placeholder="E-mail" minlength="5" maxlength="60" name="email" value="<?php echo $rowU["Email"];?>" 
    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
    title="E-mail inválido, exemplo: exemplo@exemplo.com" required >
    

<input name="campoNome" type="text" placeholder="Nome do animal" minlength="3" maxlength="60" 
value="<?php echo $row["Nome"]; ?>" required>

<input name="campoEspecie" type="text" placeholder="Espécie" value="<?php echo $row["Especie"];?>" maxlength="50" 
    pattern="[a-zA-Z\s]{5,70}" title="Espécie entre 5 e 70 letras" required>

<input name="campoRaca" type="text" placeholder="Raça" value="<?php echo $row["Raca"];?>" maxlength="50" 
pattern="[a-zA-Z]{5,40}" title="Raça entre 5 e 40 letras" required>

<input name="campoPorte" type="text" placeholder="Porte" maxlength="40" 
pattern="[a-zA-Z]{5,40}" title="Porte entre 5 e 40 letras" 
value="<?php echo $row["Porte"];?>" required>

<input name="campoPeso" type="text" placeholder="Peso (Opcional)"
value="<?php echo $row["Peso"]; ?>" maxlength="20">

<input name="campoEstado" type="text" placeholder="Estado" maxlength="30" 
pattern="[a-zA-Z]{5,30}" title="Estado entre 5 e 30 letras" 
value="<?php echo $row["Estado"]; ?>" required>

<input name="campoDataStatus" type="text" placeholder="Data da perda/Data de encontro" maxlength="50"
    id = "troca2" onclick="trocaDate2()" onblur="trocaText2()"
    value="<?php echo $row["DataStatus"]; ?>" required>
                
<input name="campoDataNasc" type="text" placeholder="Data de nascimento do animal" maxlength="50"
    id = "troca1" onclick="trocaDate1()" onblur="trocaText1()"
    value="<?php echo $row["DataStatus"]; ?>">
                
<input name="campoCidade" type="text" placeholder="Cidade" maxlength="40" 
pattern="[a-zA-Z]{5,40}" title="Cidade entre 5 e 40 letras"
value="<?php echo $row["Cidade"]; ?>" required>

<input name="campoEndereco" type="text" placeholder="Endereço" 
minlenght="8" maxlength="50"
value="<?php echo $row["Endereco"]; ?>" required>

<div class="divSelect">
<label for="selectSexo">Sexo do animal:</label>
<select name="campoSexo" id="selectSexo" required>
    <option value="<?php echo $row["Sexo"];?>"><?php echo $row["Sexo"];?></option>
    <?php if($row["Sexo"] == "Macho"){
        ?>
        <option value="Fêmea">Fêmea</option>
        <option value="Desconhecido">Não Sei</option>
        <?php
    }else if($row["Sexo"] == "Fêmea"){
        ?>
        <option value="Macho">Macho</option>
        <option value="Desconhecido">Não Sei</option>
        <?php
    }else{
    ?>
    <option value="Macho">Macho</option>    
    <option value="Fêmea">Fêmea</option>
    <?php
   } 
   ?>    
</select>
</div>
<div class="divSelect">
<label for="selectStatus">Status do animal:</label>
<select name="campoStatus" id="selectStatus" required>
    <option value="<?php echo $row["Status"]; ?>"><?php echo $row["Status"]; ?></option>
    <?php if($row["Status"] == "Perdido"){
        ?>
        <option value="Encontrado">Encontrado</option>
        <?php
    }else{
        ?>
        <option value="Perdido">Perdido</option>
        <?php
    } ?>
    
    
</select>
</div>

<button class="botaoAtualizar" onclick="return validarUpdate()">Atualizar dados</button>
</form>
<button class="botaoVoltar" onclick="location.href='listarDadosPubl.php'">Voltar</button>
</div>


<?php
mysqli_close($con);
?>
</body>

</html>
