<?php
require 'conectarBD.php';

session_start();
$id = $_SESSION["id"];
$data = date("d/m/Y");
$nome = $_SESSION["nome"];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}




$resultA = mysqli_query($conn,"SELECT CodAnimal,CodPessoa FROM animal WHERE Nome LIKE '$nome'");

$row = mysqli_fetch_assoc($resultU); 
$rowA = mysqli_fetch_assoc($resultA);

$codAnimal = $rowA["CodAnimal"];
$codPessoa = $rowA["CodPessoa"];
$resultU = mysqli_query($conn,"SELECT Nome_Completo FROM pessoa WHERE CodPessoa LIKE '$codPessoa'");
$nomeCompleto = $row["Nome_Completo"]; 
echo $codAnimal;

$sql = "INSERT INTO postagem (CodAnimal, CodPessoa, NomeCompleto, DataPostagem) 
    VALUES ('$codAnimal', '$id','$nomeCompleto', '$data')";


if ($result = mysqli_query($conn, $sql)) {
    ?>
    
    <script>
    window.location.replace("paginaPrincipal.php");
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