<?php
require 'conectarBD.php';

$especie = $_POST['campoEspecie'];
$raca = $_POST['campoRaca'];
$sexo = $_POST['campoSexo'];
$porte = $_POST['campoPorte'];
$peso = $_POST['campoPeso'];
$status = $_POST['campoStatus'];
$dataStatus = $_POST['campoDataStatus'];
$dataNasc = $_POST['campoDataNasc'];


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}


$sql = "INSERT INTO animal (Especie, Raca, Sexo, Porte, Peso, DataStatus, DataNasc) VALUES ('$especie','$raca','$sexo','$porte','$peso','$dataStatus','$dataNasc')";

if ($result = mysqli_query($conn, $sql)) {
    echo "Novo registro adicionado";
} else {
    echo "Erro executando INSERT: " . mysqli_error($conn);
}

mysqli_close($conn);
?>