*** Settings ***
Resource        baseCadastrarUsuario.robot

Test Setup      Inicia sessão 
Test Teardown   Encerra sessão

*** Test Cases ***
Animal Cadastrado
    [tags]                          cadastro_usuario
    Go To                           ${url}
    Preencher Login                 paulinho200        Paulo Torres        paulinho@bol.com.br        152.164.511-77        1974-05-08        Paulo20        Paulo20


*** Keywords ***
Preencher Login
    [Arguments]                     ${uname}        ${fullname}        ${email}        ${cpf}        ${datanasc}        ${pass}        ${pass2}

    Input Text                      css:input[name=nomeUsuario]        ${uname}
    Input Text                      css:input[name=nome]        ${fullname}
    Input Text                      css:input[name=email]          ${email}
    Input Text                      css:input[name=cpf]          ${cpf}
    Input Text                      css:input[name=campoDataNasc]          ${datanasc}
    Input Text                      css:input[name=senha]          ${pass}
    Input Text                      css:input[name=senha2]          ${pass2}
    Click Element                   css:button[name=Entrar]
