<?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$especie = $_POST['campoEspecie'];
$raca = $_POST['campoRaca'];
$sexo = $_POST['campoSexo'];
$porte = $_POST['campoPorte'];
$peso = $_POST['campoPeso'];
$estado = $_POST['campoEstado'];
$cidade = $_POST['campoCidade'];
$endereco = $_POST['campoEndereco'];
$status = $_POST['campoStatus'];
$dataStatus = $_POST['campoDataStatus'];
$dataNasc = $_POST['campoDataNasc'];
$nome = $_POST['campoNome'];
$id = $_POST['id'];

$sql = "UPDATE animal SET Especie = '$especie', Raca = '$raca', Sexo = '$sexo', Porte = '$porte' WHERE CodAnimal = '$id'";

if ($result = mysqli_query($conn, $sql)) {
    echo "Um registro alterado!";
} else {
    echo "Erro executando UPDATE: " . mysqli_error($conn);
}

mysqli_close($con);
?>