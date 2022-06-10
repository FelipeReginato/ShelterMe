<?php
require 'conectarBD.php';

session_start();
$id = $_SESSION["idA"];
$data = date("d/m/Y");
$nome = $_SESSION["nome"];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$resultA = mysqli_query($conn,"SELECT CodAnimal,CodAbrigo FROM animalabrigo WHERE Nome LIKE '$nome'");

$rowA = mysqli_fetch_assoc($resultA);

$codAnimal = $rowA["CodAnimal"];
$codAbrigo = $rowA["CodAbrigo"];


$sql = "INSERT INTO postagemabrigo (CodAnimal, CodAbrigo, Data) 
    VALUES ('$codAnimal', '$id', '$data')";


if ($result = mysqli_query($conn, $sql)) {
    unset($_SESSION["nome"]);
    ?>
    
    <script>
    window.location.replace("paginaPrincipal.php");
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