<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilosPubl.css">
        
</head>
<body>
<?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$id = $_POST['id'];
$idU = $_POST['idU'];

$result = mysqli_query($conn,"SELECT * FROM animal WHERE CodAnimal = $id");
$resultU = mysqli_query($conn,"SELECT * FROM usuario WHERE CodUsuario = $idU");
$row = mysqli_fetch_assoc($result);
$rowU = mysqli_fetch_assoc($resultU);

?>
<form action="executarUpdate.php" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>">

<input type="hidden" name="idU" value="<?php echo $idU; ?>">

<input  type="text" placeholder="E-mail" minlength="5" maxlength="60" name="email" value="<?php echo $rowU["Email"];?>" required >

<input name="campoEspecie" type="text" placeholder="Espécie" value="<?php echo $row["Especie"];?>" maxlength="50" 
pattern="[a-zA-Z\s]{10,50}" title="Espécie entre 10 e 50 letras" required>

<button>Atualizar dados</button>
</form>
<?php
mysqli_close($con);
?>
</body>

</html>
