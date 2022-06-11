<?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$id = $_POST['id'];

$sqlA = "UPDATE animalabrigo SET Status = 'Excluido' WHERE CodAnimal = '$id'";

$sql = "DELETE FROM postagemabrigo WHERE CodAnimal = '$id'";

if ($result = mysqli_query($conn, $sql) && $resultA = mysqli_query($conn, $sqlA)) {
    ?>
    <script>
    window.location.replace("listarDadosPublAbrigo.php");
    alert("Um registro excluído!");
    </script>
    <?php
} else {
?>
    <script>
    window.location.replace("listarDadosPublAbrigo.php");
    alert("<?php echo "Erro executando DELETE: " . mysqli_error($conn);?>");
    </script>
    <?php
}


mysqli_close($con);
?>