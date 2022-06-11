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
$resultU = mysqli_query($conn,"SELECT * FROM pessoa WHERE CodPessoa = $idU");
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


<input name="campoEspcs" type="text" placeholder="Especificações" maxlength="60" minlength="5"
title="Especificações entre 5 e 60 letras" 
value="<?php echo $row["Especs"];?>" required>

<input name="campoPeso" type="text" placeholder="Peso (Opcional)"
value="<?php echo $row["Peso"]; ?>" maxlength="20">

<input name="campoEstado" type="text" placeholder="Estado" maxlength="30" 
pattern="[a-zA-ZÀ-ž\s]{5,30}" title="Estado entre 5 e 30 letras" 
value="<?php echo $row["Estado"]; ?>" required>
                
<input name="campoDataNasc" type="text" placeholder="Data de nascimento do animal" maxlength="50"
    id = "troca1" onclick="trocaDate1()" onblur="trocaText1()"
    value="<?php echo $row["DataNasc"]; ?>">

<input name="campoDataStatus" type="text" placeholder="Data da perda/Data de encontro" maxlength="50"
    id = "troca2" onclick="trocaDate2()" onblur="trocaText2()"
    value="<?php echo $row["DataStatus"]; ?>" required>
                
<input name="campoCidade" type="text" placeholder="Cidade" maxlength="40" 
pattern="[a-zA-ZÀ-ž\s]{5,40}" title="Cidade entre 5 e 40 letras"
value="<?php echo $row["Cidade"]; ?>" required>

<input name="campoEndereco" type="text" placeholder="Endereço" 
minlenght="8" maxlength="50"
value="<?php echo $row["Endereco"]; ?>" required>

<div class="divSelect">
    <label for="selectEspecie">Espécie do Animal:</label>
    <select name="campoEspecie" id="selectEspecie" onchange="MudaRaca()" required>
        <option value="<?php echo $row["Especie"];?>"><?php echo $row["Especie"];?></option>
        <?php if($row["Especie"] == "Cachorro"){
        ?>
        <option value="Gato">Gato</option>
        <option value="Pássaro">Pássaro</option>
        <?php
    }else if($row["Especie"] == "Gato"){
        ?>
        <option value="Cachorro">Cachorro</option>
        <option value="Pássaro">Pássaro</option>
        <?php
    }else{
    ?>
    <option value="Gato">Gato</option>
    <option value="Pássaro">Pássaro</option>
    <?php
   } 
   ?>    
    </select>
</div>


                

<div class="divSelect">
    <label for="selectRaca">Raça do animal:</label>
    <select name="campoRaca" id="selectRaca" required>
    <?php if($row["Especie"] == "Cachorro"){
        ?>
        <?php if($row["Raca"] == "Border Collie"){
        ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Bulldog Francês">Bulldog Francês</option>
        <option value="Golden Retriever">Golden Retriever</option>
        <option value="Pug">Pug</option>
        <option value="Yorkshire Terrier">Yorkshire Terrier</option>
        <?php
        }else if($row["Raca"] == "Bulldog Francês"){
        ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Border Collie">Border Collie</option>
        <option value="Golden Retriever">Golden Retriever</option>
        <option value="Pug">Pug</option>
        <option value="Yorkshire Terrier">Yorkshire Terrier</option>
        <?php
        }else if($row["Raca"] == "Golden Retriever"){
        ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Border Collie">Border Collie</option>
        <option value="Bulldog Francês">Bulldog Francês</option>
        <option value="Pug">Pug</option>
        <option value="Yorkshire Terrier">Yorkshire Terrier</option>
        <?php
        }else if($row["Raca"] == "Pug"){
         ?>
         <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Border Collie">Border Collie</option>
        <option value="Bulldog Francês">Bulldog Francês</option>
        <option value="Golden Retriever">Golden Retriever</option>
        <option value="Yorkshire Terrier">Yorkshire Terrier</option>
        <?php
        }else if($row["Raca"] == "Yorkshire Terrier"){
         ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Border Collie">Border Collie</option>
        <option value="Bulldog Francês">Bulldog Francês</option>
        <option value="Golden Retriever">Golden Retriever</option>
        <option value="Pug">Pug</option>
        <?php
        }
        ?>
        <?php
    }else if($row["Especie"] == "Gato"){
        ?>
        <?php if($row["Raca"] == "Angorá"){
        ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="British Shorthair">British Shorthair</option>
        <option value="Himalaio">Himalaio</option>
        <option value="Maine Coon">Maine Coon</option>
        <option value="Persa">Persa</option>
        <?php
        }else if($row["Raca"] == "British Shorthair"){
        ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Angorá">Angorá</option>
        <option value="Himalaio">Himalaio</option>
        <option value="Maine Coon">Maine Coon</option>
        <option value="Persa">Persa</option>
        <?php
        }else if($row["Raca"] == "Himalaio"){
        ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Angorá">Angorá</option>
        <option value="British Shorthair">British Shorthair</option>
        <option value="Maine Coon">Maine Coon</option>
        <option value="Persa">Persa</option>
        <?php
        }else if($row["Raca"] == "Maine Coon"){
         ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Angorá">Angorá</option>
        <option value="British Shorthair">British Shorthair</option>
        <option value="Himalaio">Himalaio</option>
        <option value="Persa">Persa</option>
        <?php
        }else if($row["Raca"] == "Persa"){
         ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Angorá">Angorá</option>
        <option value="British Shorthair">British Shorthair</option>
        <option value="Himalaio">Himalaio</option>
        <option value="Maine Coon">Maine Coon</option>
        <?php
        }
        ?>
        <?php
    }else{
    ?>

        <?php if($row["Raca"] == "Canário"){
        ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Calopsita">Calopsita</option>
        <option value="Diamante de Gould">Diamante de Gould</option>
        <option value="Manon">Manon</option>
        <option value="Periquito">Periquito</option>
        <?php
        }else if($row["Raca"] == "Calopsita"){
        ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Canário">Canário</option>
        <option value="Diamante de Gould">Diamante de Gould</option>
        <option value="Manon">Manon</option>
        <option value="Periquito">Periquito</option>
        <?php
        }else if($row["Raca"] == "Diamante de Gould"){
        ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Canário">Canário</option>
        <option value="Calopsita">Calopsita</option>
        <option value="Manon">Manon</option>
        <option value="Periquito">Periquito</option>
        <?php
        }else if($row["Raca"] == "Manon"){
         ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Canário">Canário</option>
        <option value="Calopsita">Calopsita</option>
        <option value="Diamante de Gould">Diamante de Gould</option>
        <option value="Periquito">Periquito</option>
        <?php
        }else if($row["Raca"] == "Periquito"){
         ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Canário">Canário</option>
        <option value="Calopsita">Calopsita</option>
        <option value="Diamante de Gould">Diamante de Gould</option>
        <option value="Manon">Manon</option>
        <?php
        }
        ?>
        
    <?php
       } 
    ?>
    </select>
</div>


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
