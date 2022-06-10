<?php
require 'conectarBD.php';

session_start();
$id = $_SESSION["idA"];

$especie = $_POST['campoEspecie'];
$raca = $_POST['campoRaca'];
$porte = $_POST['campoPorte'];
$peso = $_POST['campoPeso'];
$sexo = $_POST['campoSexo'];
$idade = $_POST['campoIdade'];
$estado = $_POST['campoEstado'];
$cidade = $_POST['campoCidade'];
$endereco = $_POST['campoEndereco'];
$dataEnc = $_POST['campoDataEncontro'];
$cor = $_POST['campoCor'];
$nome = $_POST['campoNome'];


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

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}


$sql = "INSERT INTO animalabrigo (CodAbrigo,Especie,Raca,Porte,Peso,Sexo,Idade,Estado,Cidade,Endereco,DataEncontro,Cor,Nome) 
VALUES ('$id','$especie','$raca','$porte','$peso','$sexo','$idade','$estado','$cidade','$endereco','$novaDataEnc','$cor','$nome')";

$_SESSION["nome"] = $nome;

if ($result = mysqli_query($conn, $sql)) {
    ?>
    
    <script>
    window.location.replace("enviarPublicacaoAbrigo.php");
    </script>
    <?php
} else {
    ?>
    <script>
    window.location.replace("cadastroAnimalAbrigo.php");
    alert("<?php echo "Erro executando INSERT: " . mysqli_error($conn);?>");
    </script>
    <?php
}

mysqli_close($conn);
?>