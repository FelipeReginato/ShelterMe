<?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$id = $_POST['id'];

$sql = "DELETE FROM postagem WHERE CodAnimal = $id";

if ($result = mysqli_query($conn, $sql)) {
    echo "Um registro excluído!";
} else {
echo "Erro executando DELETE: " . mysqli_error($conn);
}


mysqli_close($con);
?>