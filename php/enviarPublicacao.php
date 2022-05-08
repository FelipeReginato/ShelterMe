<?php
require 'conectarBD.php';

$usuario = $_POST['codUsu'];
$animal = $_POST['codAni'];
$nome = $_POST['nome'];
$data = date("d/m/Y");

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}


$sql = "INSERT INTO postagem (CodUsuario, CodAnimal, NomeCompleto, DataPostagem) VALUES ('$usuario','$animal','$nome','$data')";

if ($result = mysqli_query($conn, $sql)) {
    ?>
    
    <script>
    window.location.replace("listarDadosPubl.php");
    alert("Nova publicação enviada!");
    </script>
    <?php
} else {
    
    ?>
    
    <script>
    window.location.replace("criarPublicacao.php");
    alert("<?php echo "Erro executando INSERT: " . mysqli_error($conn);?>");
    </script>
    <?php
}

mysqli_close($conn);
?>