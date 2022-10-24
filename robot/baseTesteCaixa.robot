*** Settings ***
Library	SeleniumLibrary

*** Variables ***
${url}	http://localhost/ShelterMe/paginas/paginaAnimal.html

*** Keywords ***
Inicia sessão
    Open Browser	${url}	chrome

Encerra sessão
    Capture Page Screenshot
    Close Browser