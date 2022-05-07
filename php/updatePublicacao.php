<?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM animal WHERE CodAnimal = $id");
$row = mysqli_fetch_assoc($result);
?>
<form action="../php/executarUpdate.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input name="campoEspecie" type="text" placeholder="Espécie" value=<?php echo $row["Especie"];?> maxlength="50" 
pattern="[a-zA-Z\s]{10,50}" title="Espécie entre 10 e 50 letras" required>
<button>Atualizar dados</button>
</form>
<?php
mysqli_close($con);
?>