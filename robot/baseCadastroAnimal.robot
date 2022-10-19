*** Settings ***
Library	SeleniumLibrary

*** Variables ***
${url}	http://localhost/ShelterMe/php/loginUsuario.php

*** Keywords ***
Inicia sessão
    Open Browser	${url}	chrome

Encerra sessão
    Capture Page Screenshot
    Close Browser