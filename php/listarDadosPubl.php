<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilosPubl.css">
        
</head>
<body>
    <div>
        <button onclick="location.href='criarPublicacao.php'">Criar nova publicação</button>
        <button onclick="location.href='../paginas/paginaMenuPrincipal.html'">Voltar</button>
    </div><br>
<?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}



$result = mysqli_query($conn,"SELECT * FROM animal WHERE CodAnimal IN (SELECT CodAnimal FROM postagem)");
$resultU = mysqli_query($conn,"SELECT * FROM usuario WHERE CodUsuario IN (SELECT CodUsuario FROM postagem)");
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
    <table>
    <tr>
    <td>
    
    <label><b>Contato:</b></label>
    <?php echo $rowU["Email"]; ?> 
    </td><td>
    
    <label><b>Nome:</b></label>
    <?php echo $row["Nome"]; ?> 
    </td><td>
    
    <label><b>Especie:</b></label>
    <?php echo $row["Especie"]; ?> 
    </td><td>
    
    <label><b>Raça:</b></label>
    <?php echo $row["Raca"]; ?> 
    </td><td>
    
    <label><b>Porte:</b></label>
    <?php echo $row["Porte"]; ?> 
    </td><td>
    
    <label><b>Peso:</b></label>
    <?php echo $row["Peso"]; ?> 
    </td><td>
    
    <label><b>Sexo:</b></label>
    <?php echo $row["Sexo"]; ?> 
    
    </td><td>
    
    <label><b>Estado:</b></label>
    <?php echo $row["Estado"]; ?> 
    </td><td>
    
    <label><b>Cidade:</b></label>
    <?php echo $row["Cidade"]; ?> 
    </td><td>
    
    <label><b>Status:</b></label>
    <?php echo $row["Status"]; ?> 
    </td><td>
    
    <label><b>Data Perda/Encontro:</b></label>
    <?php echo $dataFinalStatus; ?> 
    
    </td><td>
    
    <label><b>Data de Nascimento:</b></label>
    <?php echo $dataFinalNasc; ?>
    
    </td><td>

    <script>
        function validarDelete(){
            let confirma = confirm("Você deseja mesmo apagar a publicação de <?php echo $row["Nome"]; ?>");
            if (confirma){
            return true;
        }else{
            return false;
        }
        }
        
    </script>

    <form action="updatePublicacao.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["CodAnimal"]; ?>">
    <input type="hidden" name="idU" value="<?php echo $rowU["CodUsuario"]; ?>">
    <button>Editar</button>
    </form>

    </td><td>
    <form action="deletarPublicacao.php" name="formDelete" method="post">
    <input type="hidden" name="id" value="<?php echo $row["CodAnimal"]; ?>">
    <button onclick="return validarDelete()">Excluir</button>
    </form>
    </td>
    </tr>
	<?php
}
mysqli_close($con);
?>
</body>

</html>
