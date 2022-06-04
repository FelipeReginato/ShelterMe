<?php
require 'conectarBD.php';

$nomeUsuario = $_POST['nomeUsuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$dataNasc = $_POST['campoDataNasc'];
$senha = md5($_POST['senha']);

if($dataNasc != ""){
    if (strpos($dataNasc,"-") != false){
        $strData = explode('-',$dataNasc);
    }else{
        $strData = explode('/',$dataNasc);
    }
    $ano = $strData[2];
	$mes = $strData[1];
	$dia = $strData[0];

	$novaDataNasc = $ano.'-'.$mes.'-'.$dia;
}else{
    $novaDataNasc = "";
}

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}


$sql = "INSERT INTO pessoa (Nome_Usuario,Nome_Completo,CPF,Data_Nascimento,Email,Senha) VALUES ('$nomeUsuario','$nome','$cpf','$novaDataNasc','$email','$senha')";

if ($result = mysqli_query($conn, $sql)) {
    ?>
    
    <script>
    window.location.replace("../paginas/telaLogin.html");
    alert("Novo usuário cadastrado!");
    </script>
    <?php
} else {
    ?>
    <script>
    window.location.replace("../php/cadastroUsuario.php");
    alert("<?php echo "Erro executando INSERT: " . mysqli_error($conn);?>");
    </script>
    <?php
}

mysqli_close($conn);
?>