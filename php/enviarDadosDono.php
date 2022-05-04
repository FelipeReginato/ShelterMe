<?php
require 'conectarBD.php';

$nome = $_POST['campoNome'];
$telefone = $_POST['campoTelefone'];
$cpf = $_POST['campoCPF'];
$estado = $_POST['campoEstado'];
$cidade = $_POST['campoCidade'];
$bairro = $_POST['campoBairro'];
$rua = $_POST['campoRua'];
$numero = $_POST['campoNumero'];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}


$sql = "INSERT INTO donoanimal (Nome,Telefone,CPF) VALUES ('$nome','$telefone','$cpf')";

if ($result = mysqli_query($conn, $sql)) {
    echo "Novo registro adicionado";
} else {
    echo "Erro executando INSERT: " . mysqli_error($conn);
}

mysqli_close($conn);
?>