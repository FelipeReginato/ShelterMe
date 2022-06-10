<?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$especie = $_POST['campoEspecie'];
$raca = $_POST['campoRaca'];
$sexo = $_POST['campoSexo'];
$espcs = $_POST['campoEspcs'];
$peso = $_POST['campoPeso'];
$estado = $_POST['campoEstado'];
$cidade = $_POST['campoCidade'];
$endereco = $_POST['campoEndereco'];
$status = $_POST['campoStatus'];
$dataStatus = $_POST['campoDataStatus'];
$dataNasc = $_POST['campoDataNasc'];
$nome = $_POST['campoNome'];
$id = $_POST['id'];
$idU = $_POST['idU'];
$email = $_POST['email'];

if($dataNasc != ""){
    if (strpos($dataNasc,"-") != false){
        $strData = explode('-',$dataNasc);
    }else{
        $strData = explode('/',$dataNasc);
    }
    $ano = $strData[2];
	$mes = $strData[1];
	$dia = $strData[0];

	$novaDataNasc = $ano.'-'.$mes.'-'.$dia;
}else{
    $novaDataNasc = "";
}

if($dataStatus != ""){
    if (strpos($dataStatus,"-") != false){
        $strData = explode('-',$dataStatus);
    }else{
        $strData = explode('/',$dataStatus);
    }
    $ano = $strData[2];
	$mes = $strData[1];
	$dia = $strData[0];

	$novaDataStatus = $ano.'-'.$mes.'-'.$dia;
}else{
    $novaDataStatus = "";
}

$sql = "UPDATE animal SET Especie = '$especie', Raca = '$raca', Sexo = '$sexo', Especs = '$espcs', Peso = '$peso', 
    Estado = '$estado', Cidade = '$cidade', Endereco = '$endereco', Status = '$status', DataStatus = '$dataStatus', 
    DataNasc = '$dataNasc', Nome = '$nome' WHERE CodAnimal = '$id'";


$sqlU = "UPDATE pessoa SET Email='$email' WHERE CodPessoa = '$idU'";

if ($resultU = mysqli_query($conn, $sqlU) && $result = mysqli_query($conn, $sql)) {
    ?>
    <script>
    window.location.replace("listarDadosPubl.php");
    </script>
    <?php
} else {
    ?>
    <script>
    window.location.replace("listarDadosPubl.php");
    alert("<?php echo "Erro executando UPDATE: " . mysqli_error($conn);?>");
    </script>
    <?php
}

mysqli_close($con);
?>