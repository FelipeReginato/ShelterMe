<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <link rel="stylesheet" href="../css/estiloUpdtPublAbrigo.css">
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

$result = mysqli_query($conn,"SELECT * FROM animalabrigo WHERE CodAnimal = $id");
$resultU = mysqli_query($conn,"SELECT * FROM abrigo WHERE CodAbrigo = $idU");
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
<form action="executarUpdateAbrigo.php" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>">

<input type="hidden" name="idU" value="<?php echo $idU; ?>">

<input class="inputEmail" type="text" placeholder="E-mail" minlength="5" maxlength="60" name="email" value="<?php echo $rowU["Email"];?>" 
    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
    title="E-mail inválido, exemplo: exemplo@exemplo.com" required >
    

<input name="campoNome" type="text" placeholder="Nome do animal" minlength="3" maxlength="60" 
value="<?php echo $row["Nome"]; ?>" required>

<input name="campoPeso" type="text" placeholder="Peso (Opcional)"
value="<?php echo $row["Peso"]; ?>" maxlength="20">



<input name="campoEstado" type="text" placeholder="Estado" maxlength="30" value="<?php echo $row["Estado"]; ?>"
pattern="[a-zA-ZÀ-ž\s]{5,30}" title="Estado entre 5 e 30 letras" required>


<input id="troca2" onclick="trocaDate2()" onblur="trocaText2()" name="campoDataEncontro" value="<?php echo $row["DataEncontro"]; ?>"
type="text" placeholder="Data de encontro" maxlength="50">
                
<input name="campoCidade" type="text" placeholder="Cidade" maxlength="40" value="<?php echo $row["Cidade"]; ?>"
pattern="[a-zA-ZÀ-ž\s]{5,40}" title="Cidade entre 5 e 40 letras" required>

<input name="campoEndereco" type="text" placeholder="Endereço" value="<?php echo $row["Endereco"]; ?>"
minlenght="8" maxlength="50" required>

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
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Border Collie">Border Collie</option>
        <option value="Bulldog Francês">Bulldog Francês</option>
        <option value="Golden Retriever">Golden Retriever</option>
        <option value="Pug">Pug</option>
        <option value="Yorkshire Terrier">Yorkshire Terrier</option>
        <?php
    }else if($row["Especie"] == "Gato"){
        ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Angorá">Angorá</option>
        <option value="British Shorthair">British Shorthair</option>
        <option value="Himalaio">Himalaio</option>
        <option value="Maine Coon">Maine Coon</option>
        <option value="Persa">Persa</option>
        <?php
    }else{
    ?>
        <option value="<?php echo $row["Raca"];?>"><?php echo $row["Raca"];?></option>
        <option value="Canário">Canário</option>
        <option value="Calopsita">Calopsita</option>
        <option value="Diamante de Gould">Diamante de Gould</option>
        <option value="Manon">Manon</option>
        <option value="Periquito">Periquito</option>
        
    <?php
       } 
    ?>
    </select>
</div>

<div class="divSelect">
    <label for="selectCor">Cor do Animal:</label>
        <select name="campoCor" id="selectCor" required>
        <option value="<?php echo $row["Cor"];?>"><?php echo $row["Cor"];?></option>
        <?php if($row["Cor"] == "Amarelo"){
            ?>
            <option value="Azul">Azul</option>
            <option value="Branco">Branco</option>
            <option value="Caramelo">Caramelo</option>
            <option value="Colorido">Colorido</option>  
            <option value="Preto">Preto</option>
            <option value="Marrom">Marrom</option>
            <option value="Verde">Verde</option>
            <?php
            }else if($row["Cor"] == "Azul"){
                ?>
                <option value="Amarelo">Amarelo</option>
                <option value="Branco">Branco</option>
                <option value="Caramelo">Caramelo</option>
                <option value="Colorido">Colorido</option>  
                <option value="Preto">Preto</option>
                <option value="Marrom">Marrom</option>
                <option value="Verde">Verde</option>
                <?php
            }else if($row["Cor"] == "Branco"){
            ?>
            <option value="Amarelo">Amarelo</option>
            <option value="Azul">Azul</option>
            <option value="Caramelo">Caramelo</option>
            <option value="Colorido">Colorido</option>  
            <option value="Preto">Preto</option>
            <option value="Marrom">Marrom</option>
            <option value="Verde">Verde</option>
            <?php
            }else if($row["Cor"] == "Caramelo"){
            ?>
            <option value="Amarelo">Amarelo</option>
            <option value="Azul">Azul</option>
            <option value="Branco">Branco</option>
            <option value="Colorido">Colorido</option>  
            <option value="Preto">Preto</option>
            <option value="Marrom">Marrom</option>
            <option value="Verde">Verde</option>
            <?php
            }else if($row["Cor"] == "Colorido"){
            ?>
            <option value="Amarelo">Amarelo</option>
            <option value="Azul">Azul</option>
            <option value="Branco">Branco</option>
            <option value="Caramelo">Caramelo</option> 
            <option value="Preto">Preto</option>
            <option value="Marrom">Marrom</option>
            <option value="Verde">Verde</option>
            <?php
            }else if($row["Cor"] == "Preto"){
            ?>
            <option value="Amarelo">Amarelo</option>
            <option value="Azul">Azul</option>
            <option value="Branco">Branco</option>
            <option value="Caramelo">Caramelo</option>
            <option value="Colorido">Colorido</option>  
            <option value="Marrom">Marrom</option>
            <option value="Verde">Verde</option>
            <?php
            }else if($row["Cor"] == "Marrom"){
            ?>
            <option value="Amarelo">Amarelo</option>
            <option value="Azul">Azul</option>
            <option value="Branco">Branco</option>
            <option value="Caramelo">Caramelo</option>
            <option value="Colorido">Colorido</option>  
            <option value="Preto">Preto</option>
            <option value="Verde">Verde</option>
            <?php
            }else{
            ?>
            <option value="Amarelo">Amarelo</option>
            <option value="Azul">Azul</option>
            <option value="Branco">Branco</option>
            <option value="Caramelo">Caramelo</option>
            <option value="Colorido">Colorido</option>  
            <option value="Preto">Preto</option>
            <option value="Marrom">Marrom</option>
            <?php
            }
            ?>
                       
        </select>
</div>

<div class="divSelect">
    <label for="selectIdade">Idade do Animal:</label>
        <select name="campoIdade" id="selectIdade" required>
            <option value="<?php echo $row["Idade"];?>"><?php echo $row["Idade"];?></option>
            <?php if($row["Idade"] == "Idoso"){
            ?>
            <option value="Adulto">Adulto</option>
            <option value="Filhote">Filhote</option>
            <?php
            }else if($row["Idade"] == "Filhote"){
                ?>
                <option value="Idoso">Idoso</option>
                <option value="Adulto">Adulto</option>
                <?php
            }else{
                ?>
                <option value="Idoso">Idoso</option>
                <option value="Filhote">Filhote</option>
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
    <label for="selectPorte">Porte do Animal:</label>
        <select name="campoPorte" id="selectPorte" required>
        <option value="<?php echo $row["Porte"];?>"><?php echo $row["Porte"];?></option>
            <?php if($row["Porte"] == "Grande"){
        ?>
        <option value="Médio">Médio</option>
        <option value="Pequeno">Pequeno</option>
        <?php
        }else if($row["Porte"] == "Médio"){
            ?>
            <option value="Grande">Grande</option>
            <option value="Pequeno">Pequeno</option>
            <?php
        }else{
        ?>
        <option value="Grande">Grande</option>
            <option value="Médio">Médio</option>
        <?php
        } 
        ?> 
        </select>
</div>

<button class="botaoAtualizar" onclick="return validarUpdate()">Atualizar dados</button>
</form>
<button class="botaoVoltar" onclick="location.href='listarDadosPublAbrigo.php'">Voltar</button>
</div>


<?php
mysqli_close($conn);
?>
</body>

</html>
