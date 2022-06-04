<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilosPubl.css">
        
</head>
<body>
    
    <div class="divLogo">
    </div>
   


    <script>
        function validarDelete(){
            let confirma = confirm("Você deseja mesmo apagar a publicação de <?php echo $row["Nome"]; ?>?");
            if (confirma){
            return true;
        }else{
            return false;
        }
        }
        function validarSolucionar(){
            let confirma = 
            confirm("Você deseja alterar o registro de <?php echo $row["Nome"];?> para solucionado (registro desse animal não estará mais disponível) e apagar está postagem?");
        if (confirma){
            return true;
        }else{
            return false;
        }
        }
        
    </script>
<?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

session_start();
$id = $_SESSION["id"];

$result = mysqli_query($conn,"SELECT * FROM animal WHERE CodAnimal IN (SELECT CodAnimal FROM postagem)");
$resultU = mysqli_query($conn,"SELECT * FROM pessoa WHERE CodPessoa = '$id'");
$rowU = mysqli_fetch_assoc($resultU);

while ($row = mysqli_fetch_assoc($result)) {
    

    $strData = explode('-',$row["DataNasc"]);
    $ano = $strData[2];
	$mes = $strData[1];
	$dia = $strData[0];

	$dataFinalNasc = $dia.'/'.$mes.'/'.$ano;
    $strData = explode('-',$row["DataStatus"]);
    $ano = $strData[2];
	$mes = $strData[1];
	$dia = $strData[0];

	$dataFinalStatus = $dia.'/'.$mes.'/'.$ano;
    ?> 

        <table class="tableDados"> 
        <tr class="trDados">

        <td class= "tdDados">
        <label><b>Contato:</b></label>
        <?php echo $rowU["Email"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Nome:</b></label>
        <?php echo $row["Nome"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Especie:</b></label>
        <?php echo $row["Especie"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Raça:</b></label>
        <?php echo $row["Raca"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Porte:</b></label>
        <?php echo $row["Porte"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Peso:</b></label>
        <?php echo $row["Peso"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Sexo:</b></label>
        <?php echo $row["Sexo"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Estado:</b></label>
        <?php echo $row["Estado"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Cidade:</b></label>
        <?php echo $row["Cidade"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Status:</b></label>
        <?php echo $row["Status"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Endereço:</b></label>
        <?php echo $row["Endereco"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Data Perda/Encontro:</b></label>
        <?php echo $dataFinalStatus; ?> 
        </td>

        <td class= "tdDados">
        
        <label><b>Data de Nascimento:</b></label>
        <?php echo $dataFinalNasc; ?>
        </td>
        
        <td class= "tdDadosAcao">
        <form action="updatePublicacao.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row["CodAnimal"]; ?>">
        <input type="hidden" name="idU" value="<?php echo $rowU["CodPessoa"]; ?>">
        <button class="botaoEditar" >Editar</button>
        </form>
        </td> 
        
        <td class= "tdDadosAcao">
        <form action="deletarPublicacao.php" name="formDelete" method="post">
        <input type="hidden" name="id" value="<?php echo $row["CodAnimal"]; ?>">
        <button class="botaoExcluir" onclick="return validarDelete()">Excluir</button>
        </form>
        </td>
        
        <td class= "tdDadosAcao">
        <form action="solucionarPublicacao.php" name="formSolucionar" method="post">
        <input type="hidden" name="id" value="<?php echo $row["CodAnimal"]; ?>">
        <button class="botaoSolucionado" onclick="return validarSolucionar()">Solucionado</button>
        </form>
        </td>
        </tr>
        
        </table>

	<?php
    
}
mysqli_close($con);
?>
</body>

</html>