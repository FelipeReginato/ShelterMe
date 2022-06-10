<?php
require 'conectarBD.php';
session_start();
$id = $_SESSION["id"];

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

$_SESSION["nome"] = $nome;



$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$sql = "INSERT INTO animal (CodPessoa, Especie, Raca, Sexo, Especs, Peso, Status, DataStatus, DataNasc, Estado, Cidade, Endereco, Nome) 
    VALUES ('$id','$especie','$raca','$sexo','$espcs','$peso','$status','$novaDataStatus','$novaDataNasc','$estado','$cidade','$endereco','$nome')";




if ($result = mysqli_query($conn, $sql)) {
    ?>
    
    <script>
    window.location.replace("../php/enviarPublicacao.php");
    </script>
    <?php
} else {
    ?>
    <script>
    window.location.replace("../paginas/paginaAnimal.html");
    alert("<?php echo "Erro executando INSERT: " . mysqli_error($conn);?>");
    </script>
    <?php
}


mysqli_close($conn);
?>