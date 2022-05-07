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



$result = mysqli_query($conn,"SELECT * FROM Animal");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<table>";
    echo "<tr>";
    echo "<td>";
    echo $row["CodAnimal"];
    echo "</td><td>";
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
    echo $row["DataStatus"];
    echo "</td><td>";
    echo $row["DataNasc"];
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
        </td>
        <?php
    }
    
}
mysqli_close($con);
?>
</body>

</html>
