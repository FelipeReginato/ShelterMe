<?php
require 'conectarBD.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$cnpj = $_POST['cnpj'];
$estado = $_POST['campoEstado'];
$cidade = $_POST['campoCidade'];
$endereco = $_POST['campoEndereco'];
$senha = md5($_POST['senha']);

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}


$sql = "INSERT INTO abrigo (Nome_Abrigo,Email,CNPJ,Estado,Cidade,Endereco,Senha) VALUES ('$nome','$email','$cnpj','$estado','$cidade','$endereco','$senha')";

if ($result = mysqli_query($conn, $sql)) {
    ?>
    
    <script>
    window.location.replace("../paginas/paginaMenuPrincipal.html");
    alert("Novo abrigo cadastrado!");
    </script>
    <?php
} else {
    ?>
    <script>
    window.location.replace("../paginas/telaLogin.html");
    alert("<?php echo "Erro executando INSERT: " . mysqli_error($conn);?>");
    </script>
    <?php
}

mysqli_close($conn);
?>