<?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$id = $_POST['id'];

$sqlA = "UPDATE animal SET Status = 'Solucionado' WHERE CodAnimal = '$id'";

$sql = "DELETE FROM postagem WHERE CodAnimal = $id";

if ($result = mysqli_query($conn, $sql) && $resultA = mysqli_query($conn, $sqlA)) {
    ?>
    <script>
    window.location.replace("listarDadosPubl.php");
    alert("Registro do animal alterado e publicação apagada!");
    </script>
    <?php
} else {
?>
    <script>
    window.location.replace("listarDadosPubl.php");
    alert("<?php echo "Erro executando: " . mysqli_error($conn);?>");
    </script>
    <?php
}

mysqli_close($con);
?>