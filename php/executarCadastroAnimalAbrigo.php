<?php
require 'conectarBD.php';

$especie = $_POST['campoEspecie'];
$raca = $_POST['campoRaca'];
$porte = $_POST['campoPorte'];
$peso = $_POST['campoPeso'];
$sexo = $_POST['campoSexo'];
$idade = $_POST['campoIdade'];
$estado = $_POST['campoEstado'];
$cidade = $_POST['campoCidade'];
$endereco = $_POST['campoEndereco'];
$dataEnc = $_POST['campoDataEncontro'];
$cor = $_POST['campoCor'];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}


$sql = "INSERT INTO animalabrigo (Especie,Raca,Porte,Peso,Sexo,Idade,Estado,Cidade,Endereco,DataEncontro,Cor) 
VALUES ('$especie','$raca','$porte','$peso','$sexo','$idade','$estado','$cidade','$endereco','$dataEnc','$cor')";

if ($result = mysqli_query($conn, $sql)) {
    ?>
    
    <script>
    window.location.replace("../paginas/paginaPrincipal.html");
    alert("Novo animal cadastrado!");
    </script>
    <?php
} else {
    ?>
    <script>
    window.location.replace("../paginas/telaCadastroAnimalAbrigo.html");
    alert("<?php echo "Erro executando INSERT: " . mysqli_error($conn);?>");
    </script>
    <?php
}

mysqli_close($conn);
?>