<?php
require 'conectarBD.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}


$sql = "INSERT INTO usuario (NomeUsuario,Email,Senha) VALUES ('$nome','$email','$senha')";

if ($result = mysqli_query($conn, $sql)) {
    ?>
    
    <script>
    window.location.replace("../paginas/paginaMenuPrincipal.html");
    alert("Novo usuário registrado!");
    </script>
    <?php
} else {
    ?>
    <script>
    window.location.replace("../paginas/paginaMenuPrincipal.html");
    alert("<?php echo "Erro executando INSERT: " . mysqli_error($conn);?>");
    </script>
    <?php
}

mysqli_close($conn);
?>