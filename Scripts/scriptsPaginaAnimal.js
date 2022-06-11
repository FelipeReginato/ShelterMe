function trocaDate1() {
        document.getElementById('troca1').type = 'date';
}  
function trocaText1(){
    document.getElementById('troca1').type = 'text';
}
function trocaDate2() {
    document.getElementById('troca2').type = 'date';
}  
function trocaText2(){
document.getElementById('troca2').type = 'text';
}


var especiesRacas = {};
especiesRacas['Cachorro'] = ['Border Collie', 'Bulldog Francês', 'Golden Retriever', 'Pug', 'Yorkshire Terrier'];
especiesRacas['Gato'] = ['Angorá', 'British Shorthair', 'Himalaio', 'Maine Coon', 'Persa'];
especiesRacas['Pássaro'] = ['Canário', 'Calopsita', 'Diamante de Gould', 'Manon', 'Periquito'];

function MudaRaca(){
var Especie = document.getElementById("selectEspecie")
var Raca = document.getElementById("selectRaca");

if(Especie.value == 'Cachorro'){

    var x1 = document.createElement('option');
    x1.value = "Border Collie";
    x1.innerHTML = "Border Collie";
    Raca.appendChild(x1);

    var x2 = document.createElement('option');
    x2.value = "Border Collie";
    x2.innerHTML = "Border Collie";
    Raca.appendChild(x2);

    var x3 = document.createElement('option');
    x3.value = "Border Collie";
    x3.innerHTML = "Border Collie";
    Raca.appendChild(x3);

    var x4 = document.createElement('option');
    x4.value = "Border Collie";
    x4.innerHTML = "Border Collie";
    Raca.appendChild(x4);

    var x5 = document.createElement('option');
    x5.value = "Border Collie";
    x5.innerHTML = "Border Collie";
    Raca.appendChild(x5);

}else if(Especie.value == 'Gato'){
    x1.value = "Border Collie";
    x1.innerHTML = "Border Collie";
    Raca.appendChild(x1);

    var x2 = document.createElement('option');
    x2.value = "Border Collie";
    x2.innerHTML = "Border Collie";
    Raca.appendChild(x2);

    var x3 = document.createElement('option');
    x3.value = "Border Collie";
    x3.innerHTML = "Border Collie";
    Raca.appendChild(x3);

    var x4 = document.createElement('option');
    x4.value = "Border Collie";
    x4.innerHTML = "Border Collie";
    Raca.appendChild(x4);

    var x5 = document.createElement('option');
    x5.value = "Border Collie";
    x5.innerHTML = "Border Collie";
    Raca.appendChild(x5);

    
}else if(Especie.value == 'Pássaro'){
    x1.value = "Border Collie";
    x1.innerHTML = "Border Collie";
    Raca.appendChild(x1);

    var x2 = document.createElement('option');
    x2.value = "Border Collie";
    x2.innerHTML = "Border Collie";
    Raca.appendChild(x2);

    var x3 = document.createElement('option');
    x3.value = "Border Collie";
    x3.innerHTML = "Border Collie";
    Raca.appendChild(x3);
    
    var x4 = document.createElement('option');
    x4.value = "Border Collie";
    x4.innerHTML = "Border Collie";
    Raca.appendChild(x4);

    var x5 = document.createElement('option');
    x5.value = "Border Collie";
    x5.innerHTML = "Border Collie";
    Raca.appendChild(x5);
}
} 

