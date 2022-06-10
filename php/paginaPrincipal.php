<html>
    <head>
        <meta charset="UTF-8">
        
        <script src="../Scripts/scriptsPaginaPrincipal.js"></script>
        <link rel="stylesheet" href="../css/estilosPaginaPrincipal.css">
     

    </head>

    <body>
        <ol class="Menu">

            <li class="liMenuPrimeiro"> <img src="../imagens/PataIcone.png"  onclick="AparecerOpcoes()" class="Icones" title="Funções com o Animal" ></li>
      
            <li class="liMenu"><img src="../imagens/AboutUs.png" class="Icones" title="AboutUS"> </li>

            <li class="liMenuSair"><img src="../imagens/Desconectar.png" class="Icones" title="Desconectar" onclick="location.href='menuPrincipal.php'"></li>

        </ol>
     
        <ol id="liPata" class="OlSubMenu">
            
            <li class="liCadastrar" onclick="location.href='../paginas/paginaAnimal.html'"> Cadastrar Novo Animal </li>
            <li class="lisSubMenus" onclick="location.href='listarDadosPubl.php'"> Editar Cadastrados </li>
           
        
        </ol>

        <div class="divPublicacoes">
        <?php
require 'conectarBD.php';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
}

$result = mysqli_query($conn,"SELECT p.Email,a.* FROM pessoa p,animal a,postagem o WHERE a.CodAnimal = o.CodAnimal AND p.CodPessoa = o.CodPessoa");


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
    ?> 

        <table class="tableDados"> 
        <tr class="trDados">

        <td class= "tdDados">
        <label><b>Contato:</b></label>
        <?php echo $row["Email"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Nome:</b></label>
        <?php echo $row["Nome"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Especie:</b></label>
        <?php echo $row["Especie"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Raça:</b></label>
        <?php echo $row["Raca"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Porte:</b></label>
        <?php echo $row["Especs"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Peso:</b></label>
        <?php echo $row["Peso"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Sexo:</b></label>
        <?php echo $row["Sexo"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Estado:</b></label>
        <?php echo $row["Estado"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Cidade:</b></label>
        <?php echo $row["Cidade"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Status:</b></label>
        <?php echo $row["Status"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Endereço:</b></label>
        <?php echo $row["Endereco"]; ?> 
        </td>
        
        <td class= "tdDados">
        <label><b>Data Perda/Encontro:</b></label>
        <?php echo $dataFinalStatus; ?> 
        </td>

        <td class= "tdDados">
        
        <label><b>Data de Nascimento:</b></label>
        <?php echo $dataFinalNasc; ?>
        </td>
        
        </table>

	<?php
 }

mysqli_close($con);
?>

        </div>
    </body>
</html> 