<?php
require 'conectarBD.php';

$usuario = $_POST['codUsu'];
$animal = $_POST['codAni'];
$tipo = $_POST['tipo'];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}


$sql = "INSERT INTO postagem (CodUsuario, CodAnimal, TipoPostagem) VALUES ('$usuario','$animal','$tipo')";

if ($result = mysqli_query($conn, $sql)) {
    echo "Novo registro adicionado";
} else {
    echo "Erro executando INSERT: " . mysqli_error($conn);
}

mysqli_close($conn);
?>