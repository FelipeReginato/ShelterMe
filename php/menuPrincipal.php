<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilosMenuPrincipal.css">
       
    </head>



    <body>
        <div class="divBackground">

            <?php
            session_start();
            unset($_SESSION["id"]);
            ?>
    
                <div class="divLogo"></div>

                <div class="divTexto">Bem vindo(a) ao ShelterMe, Nosso objetivo é facilitar a localização de animais perdidos por meio da cooperação entre os usuários, e, com a colaboração de abrigos, ajudamos animais abandonados. </div>


                <div class="divBotoes">
                    
                    <button class="botaoLogin" onclick="window.location.href = '../php/loginUsuario.php'">
                        Ir para Login
                    </button> 
                    
                    <button class="botaoCadastro" onclick="window.location.href = '../php/cadastroUsuario.php'">
                        Ir para Cadastro
                    </button>
                    
                </div>
            </div>

    </body>
</html>