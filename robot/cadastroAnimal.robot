*** Settings ***
Resource        baseCadastroAnimal.robot

Test Setup      Inicia sessão 
Test Teardown   Encerra sessão

*** Test Cases ***
Animal Cadastrado
    [tags]                          animal_sucesso
    Go To                           ${url}
    Preencher Login                 paulinho200        paulinho@bol.com.br        Paulo20
    Pagina Principal
    Entrar pagina do Animal
    Preencher Dados do Animal       Polentinha       Cego de um olho        5 Kgs        Parana        2017-07-30        2022-08-23        Colombo        Rua Sarampo, 700
    Pagina Principal Animal Cadastrado

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

Entrar Pagina do Animal
    Click Element                   xpath=//img[contains(@src, 'PataIcone.png')]
    Wait Until Element Is Visible   class:liCadastrar
    Click Element                   xpath=//*[contains(text(), "Cadastrar Novo Animal")]
Pagina Principal            
    Page Should Contain            Cor publicação
Mensagem alerta Login
    Alert Should Be Present        Login Incorreto
Pagina Principal Animal Cadastrado
    Page Should Contain            Polentinha