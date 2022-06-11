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

            <h3 class= "CorAbrigo">Cor publicação (Abrigo)</h3>
            <h3 class= "CorUsuario">Cor publicação (Usuario)</h3>

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

$result = mysqli_query($conn,"SELECT p.Email,a.* FROM postagem o
INNER JOIN animal a ON a.CodAnimal = o.CodAnimal
INNER JOIN pessoa p ON p.CodPessoa = o.CodPessoa");

$resultA = mysqli_query($conn,"SELECT a.Email,aa.* FROM postagemabrigo o
INNER JOIN animalabrigo aa ON aa.CodAnimal = o.CodAnimal
INNER JOIN abrigo a ON a.CodAbrigo = o.CodAbrigo");

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
       
        <td class= "tdDadosUsuario">
        <label><b>Contato:</b></label>
        <?php echo $row["Email"]; ?> 
        </td>
        
        <td class= "tdDadosUsuario">
        <label><b>Nome:</b></label>
        <?php echo $row["Nome"]; ?> 
        </td>
        
        <td class= "tdDadosUsuario">
        <label><b>Especie:</b></label>
        <?php echo $row["Especie"]; ?> 
        </td>
        
        <td class= "tdDadosUsuario">
        <label><b>Raça:</b></label>
        <?php echo $row["Raca"]; ?> 
        </td>
        
        <td class= "tdDadosUsuario">
        <label><b>Especs:</b></label>
        <?php echo $row["Especs"]; ?> 
        </td>
        
        <td class= "tdDadosUsuario">
        <label><b>Peso:</b></label>
        <?php echo $row["Peso"]; ?> 
        </td>
        
        <td class= "tdDadosUsuario">
        <label><b>Sexo:</b></label>
        <?php echo $row["Sexo"]; ?> 
        </td>
        
        <td class= "tdDadosUsuario">
        <label><b>Estado:</b></label>
        <?php echo $row["Estado"]; ?> 
        </td>
        
        <td class= "tdDadosUsuario">
        <label><b>Cidade:</b></label>
        <?php echo $row["Cidade"]; ?> 
        </td>
        
        <td class= "tdDadosUsuario">
        <label><b>Status:</b></label>
        <?php echo $row["Status"]; ?> 
        </td>
        
        <td class= "tdDadosUsuario">
        <label><b>Endereço:</b></label>
        <?php echo $row["Endereco"]; ?> 
        </td>

        <td class= "tdDadosUsuario">
        
        <label><b>Data de Nascimento:</b></label>
        <?php echo $dataFinalNasc; ?>
        </td>
        
        <td class= "tdDadosUsuario">
        <label><b>Data Perda/Encontro:</b></label>
        <?php echo $dataFinalStatus; ?> 
        </td>

        </table>

	<?php
}

while ($row = mysqli_fetch_assoc($resultA)) {

    $strData = explode('-',$row["DataEncontro"]);
    $ano = $strData[2];
	$mes = $strData[1];
	$dia = $strData[0];

	$dataFinalEncontro = $dia.'/'.$mes.'/'.$ano;

    ?> 

    <table class="tableDados"> 
    <tr class="trDados">
    <td class= "tdDadosAbrigo">
    <label><b>Contato:</b></label>
    <?php echo $row["Email"]; ?> 
    </td>
    
    <td class= "tdDadosAbrigo">
    <label><b>Nome:</b></label>
    <?php echo $row["Nome"]; ?> 
    </td>
    
    <td class= "tdDadosAbrigo">
    <label><b>Especie:</b></label>
    <?php echo $row["Especie"]; ?> 
    </td>
    
    <td class= "tdDadosAbrigo">
    <label><b>Raça:</b></label>
    <?php echo $row["Raca"]; ?> 
    </td>    
    
    <td class= "tdDadosAbrigo">
    <label><b>Porte:</b></label>
    <?php echo $row["Porte"]; ?> 
    </td>
    
    <td class= "tdDadosAbrigo">
    <label><b>Peso:</b></label>
    <?php echo $row["Peso"]; ?> 
    </td>
    
    <td class= "tdDadosAbrigo">
    <label><b>Sexo:</b></label>
    <?php echo $row["Sexo"]; ?> 
    </td>
    
    <td class= "tdDadosAbrigo">
    <label><b>Estado:</b></label>
    <?php echo $row["Estado"]; ?> 
    </td>
    
    <td class= "tdDadosAbrigo">
    <label><b>Cidade:</b></label>
    <?php echo $row["Cidade"]; ?> 
    </td>
    
    <td class= "tdDadosAbrigo">
    <label><b>Endereço:</b></label>
    <?php echo $row["Endereco"]; ?> 
    </td>

    <td class= "tdDadosAbrigo">
    <label><b>Cor:</b></label>
    <?php echo $row["Cor"]; ?> 
    </td>
    
    <td class= "tdDadosAbrigo">
    <label><b>Idade:</b></label>
    <?php echo $row["Idade"]; ?> 
    </td>

    <td class= "tdDadosAbrigo">
    <label><b>Data de Nascimento:</b></label>
    <?php echo $dataFinalEncontro; ?>
    </td>
    
    </table>

<?php
}

mysqli_close($conn);
?>

        </div>
    </body>
</html> 