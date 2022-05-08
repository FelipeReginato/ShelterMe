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


$sqlU = "SELECT CodUsuario, NomeUsuario FROM Usuario";
$sqlA = "SELECT CodAnimal, Nome FROM Animal";
				
$optionsUsu = array();
$optionsAni = array();
				
if ($result = mysqli_query($conn, $sqlU)) {
while ($row = mysqli_fetch_assoc($result)) {
		array_push($optionsUsu, "\t\t\t<option value='". $row["CodUsuario"]."'>".$row["NomeUsuario"]."</option>\n");
	}
}
if ($result = mysqli_query($conn, $sqlA)) {
	while ($row = mysqli_fetch_assoc($result)) {
        array_push($optionsAni, "\t\t\t<option value='". $row["CodAnimal"]."'>".$row["Nome"]."</option>\n");
	}
}
if (sizeof($optionsUsu) == 0){
	echo "<p><b>Nao</b> existem usuarios cadastrados!</p>";
	}
if (sizeof($optionsAni) == 0) {
	echo "<p><b>Nao</b> existem animais cadastrados!</p>";
}
echo "</div>";
            
mysqli_close($conn);
if (!(sizeof($optionsUsu) == 0 || sizeof($optionsAni) == 0)){
	?>
	<form action="enviarPublicacao.php" method="post">
		<label>Usuario</label>
			<select name="codUsu" required>
				<option value=""></option>
			<?php
			foreach($optionsUsu as $key => $value){
				echo $value;
			}
			?>
			</select><br>
			<label>Animal</label>
			<select name="codAni" required>
				<option value=""></option>
			<?php
				foreach($optionsAni as $key => $value){
					echo $value;
				}
				?>
				</select><br>
			   
	<input name="nome" type="text" placeholder="Nome Completo" maxlength="60" 
    pattern="[a-zA-Z\s]{5,60}" title="Nome completo entre 5 e 60 letras" required>
			   
	<button> Publicar </button>
	</form>
	   
	   <?php
   } 
   
?>

	

</body>

</html>