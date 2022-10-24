*** Settings ***
Library	SeleniumLibrary

*** Variables ***
${url}	http://localhost/ShelterMe/php/cadastroUsuario.php

*** Keywords ***
Inicia sessão
    Open Browser	${url}	chrome

Encerra sessão
    Close Browser