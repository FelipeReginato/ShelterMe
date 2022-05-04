<?php
require 'conectarBD.php';

$nome = $_POST['campoNome'];
$cnpj = $_POST['campoCNPJ'];
$telefone = $_POST['campoTelefone'];
$estado = $_POST['campoEstado'];
$cidade = $_POST['campoCidade'];
$bairro = $_POST['campoBairro'];
$rua = $_POST['campoRua'];
$numero = $_POST['campoNumero'];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$sql = "INSERT INTO abrigo (Telefone, Nome, CNPJ) VALUES ('$telefone','$nome','$cnpj')";

if ($result = mysqli_query($conn, $sql)) {
    echo "Novo registro adicionado";
} else {
    echo "Erro executando INSERT: " . mysqli_error($conn);
}

mysqli_close($conn);
?>