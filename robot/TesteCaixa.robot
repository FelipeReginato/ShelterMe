*** Settings ***
Resource        baseTesteCaixa.robot

Test Setup      Inicia sessão 
Test Teardown   Encerra sessão

*** Test Cases ***
Animal Cadastrado erro
    [tags]                          animal_erro
    Go To                           ${url}
    Preencher Dados do Animal       \       Cego de um olho        5 Kgs        Parana        2017-07-30        2022-08-23        Colombo        Rua Sarampo, 700
    Mensagem alerta


*** Keywords ***
Preencher Dados do Animal
    [Arguments]                     ${nomeanm}       ${esp}        ${peso}        ${estado}        ${datanasc}        ${datastatus}        ${cidade}        ${endereco}

    Input Text                      css:input[name=campoNome]        ${nomeanm}
    Input Text                      css:input[name=campoEspcs]        ${esp}
    Input Text                      css:input[name=campoPeso]        ${peso}
    Input Text                      css:input[name=campoEstado]        ${estado}
    Input Text                      css:input[name=campoDataNasc]        ${datanasc}
    Input Text                      css:input[name=campoDataStatus]        ${datastatus}
    Input Text                      css:input[name=campoCidade]        ${cidade}
    Input Text                      css:input[name=campoEndereco]          ${endereco}
    Click Element                   //option[@value="Cachorro"]
    Click Element                   //option[@value="Macho"]
    Click Element                   //option[@value="Perdido"]
    Click Element                   css:button[name=Enviar]
Mensagem alerta
    Page Should Not Contain Element     //input[@name="campoNome"][required]