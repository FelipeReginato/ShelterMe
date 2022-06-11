<?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$especie = $_POST['campoEspecie'];
$raca = $_POST['campoRaca'];
$sexo = $_POST['campoSexo'];
$idade = $_POST['campoIdade'];
$peso = $_POST['campoPeso'];
$estado = $_POST['campoEstado'];
$cidade = $_POST['campoCidade'];
$endereco = $_POST['campoEndereco'];
$dataEnc = $_POST['campoDataEncontro'];
$nome = $_POST['campoNome'];
$cor = $_POST['campoCor'];
$id = $_POST['id'];
$idU = $_POST['idU'];
$email = $_POST['email'];

if($dataEnc != ""){
    if (strpos($dataEnc,"-") != false){
        $strData = explode('-',$dataEnc);
    }else{
        $strData = explode('/',$dataEnc);
    }
    $ano = $strData[2];
	$mes = $strData[1];
	$dia = $strData[0];

	$novaDataEnc = $ano.'-'.$mes.'-'.$dia;
}else{
    $novaDataEnc = "";
}

$sql = "UPDATE animalabrigo SET Especie = '$especie', Raca = '$raca', Sexo = '$sexo', Idade = '$idade', Peso = '$peso', 
    Estado = '$estado', Cidade = '$cidade', Endereco = '$endereco', DataEncontro = '$novaDataEnc', Nome = '$nome', 
    Cor = '$cor' WHERE CodAnimal = '$id'";


$sqlU = "UPDATE abrigo SET Email='$email' WHERE CodAbrigo = '$idU'";

if ($resultU = mysqli_query($conn, $sqlU) && $result = mysqli_query($conn, $sql)) {
    ?>
    <script>
    window.location.replace("listarDadosPublAbrigo.php");
    </script>
    <?php
} else {
    ?>
    <script>
    window.location.replace("listarDadosPublAbrigo.php");
    alert("<?php echo "Erro executando UPDATE: " . mysqli_error($conn);?>");
    </script>
    <?php
}

mysqli_close($con);
?>