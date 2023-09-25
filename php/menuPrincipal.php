<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilosMenuPrincipal.css">
       
    </head>



    <body>

        <?php
        session_start();
        unset($_SESSION["id"]);
        unset($_SESSION["idA"]);
        ?>
    <img src="../imagens/LogoShelterMe.png" class="logo">  
        <div class="divPai">
                <div class="divAboutUs">

                <button class="botao" onclick="window.location.href = '../paginas/AboutUs.html'">
                        AboutUs
                    </button>
                </div>

                <div class="divBotoes">

                    <button class="botao" onclick="window.location.href = '../php/loginUsuario.php'">
                        Ir para Login
                    </button> 
                    
                    <button class="botao" onclick="window.location.href = '../php/cadastroUsuario.php'">
                        Ir para Cadastro
                    </button>

                    <button class="botao" onclick="window.location.href = '../php/cadastroAbrigo.php'">
                        Ir para Cadastro de Abrigo
                    </button>
                </div>
                  
        </div>
    </body>
</html>