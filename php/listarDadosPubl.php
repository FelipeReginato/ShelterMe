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



$result = mysqli_query($conn,"SELECT * FROM animal WHERE CodAnimal IN (SELECT CodAnimal FROM postagem)");

while ($row = mysqli_fetch_assoc($result)) {
    $strData = explode('-',$row["DataNasc"]);
    $ano = $strData[2];
	$mes = $strData[1];
	$dia = $strData[0];

	$dataFinalNasc = $dia.'/'.$mes.'/'.$ano;
    $strData = explode('-',$row["DataStatus"]);
    $ano = $strData[2];
	$mes = $strData[1];
	$dia = $strData[0];

	$dataFinalStatus = $dia.'/'.$mes.'/'.$ano;
    echo "<table>";
    echo "<tr>";
    echo "<td>";
    echo $row["Especie"];
    echo "</td><td>";
    echo $row["Raca"];
    echo "</td><td>";
    echo $row["Porte"];
    echo "</td><td>";
    echo $row["Peso"];
    echo "</td><td>";
    echo $row["Sexo"];
    echo "</td><td>";
    echo $row["Estado"];
    echo "</td><td>";
    echo $row["Cidade"];
    echo "</td><td>";
    echo $row["Status"];
    echo "</td><td>";
    echo $dataFinalStatus;
    echo "</td><td>";
    echo $dataFinalNasc;
    echo "</td>";
    if ($row['Foto']) { ?>
        <td style="text-align:left">
            <img class="imagemSelecionada" src="data:image/png;base64,<?= base64_encode($row['FotoBin']) ?>" />
        </td>
        <?php
    } else {
        ?>
        <td style="text-align:left">
            <img class="imagemSelecionada" src="../imagens/foto.png" />
        </td><td>
        <?php
    }
    ?>
    <a href='updatePublicacao.php?id=<?php echo $row["CodAnimal"];?>'>Editar</a>
    </td><td>
    <a href='deletarPublicacao.php?id=<?php echo $row["CodAnimal"];?>'>Deletar</a>
    </td>
    </tr>
	<?php
}
mysqli_close($con);
?>
</body>

</html>
