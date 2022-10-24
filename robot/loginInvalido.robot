*** Settings ***
Resource        baseCadastroAnimal.robot

Test Setup      Inicia sessão 
Test Teardown   Encerra sessão

*** Test Cases ***
Login invalido
    [tags]                          login_falha
    Go To                           ${url}
    Preencher Login                 paulinho200        paulinho@bol.com.br        Paulo3000
    Mensagem alerta Login           

*** Keywords ***
Preencher Login
    [Arguments]                     ${uname}        ${email}        ${pass}

    Input Text                      css:input[name=nome]        ${uname}
    Input Text                      css:input[name=email]          ${email}
    Input Text                      css:input[name=senha]          ${pass}
    Click Element                   css:button[name=Entrar]

Mensagem alerta Login
    Alert Should Be Present        Login Incorreto
