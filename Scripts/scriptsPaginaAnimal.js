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
    x2.value = "Bulldog Francês";
    x2.innerHTML = "Bulldog Francês";
    Raca.appendChild(x2);

    var x3 = document.createElement('option');
    x3.value = "Golden Retriever";
    x3.innerHTML = "Golden Retriever";
    Raca.appendChild(x3);

    var x4 = document.createElement('option');
    x4.value = "Pug";
    x4.innerHTML = "Pug";
    Raca.appendChild(x4);

    var x5 = document.createElement('option');
    x5.value = "Yorkshire Terrier";
    x5.innerHTML = "Yorkshire Terrier";
    Raca.appendChild(x5);

}else if(Especie.value == 'Gato'){
    x1.value = "Angorá";
    x1.innerHTML = "Angorá";
    Raca.appendChild(x1);

    var x2 = document.createElement('option');
    x2.value = "British Shorthair";
    x2.innerHTML = "British Shorthair";
    Raca.appendChild(x2);

    var x3 = document.createElement('option');
    x3.value = "Himalaio";
    x3.innerHTML = "Himalaio";
    Raca.appendChild(x3);

    var x4 = document.createElement('option');
    x4.value = "Maine Coon";
    x4.innerHTML = "Maine Coon";
    Raca.appendChild(x4);

    var x5 = document.createElement('option');
    x5.value = "Persa";
    x5.innerHTML = "Persa";
    Raca.appendChild(x5);

    
}else if(Especie.value == 'Pássaro'){
    x1.value = "Canário";
    x1.innerHTML = "Canário";
    Raca.appendChild(x1);

    var x2 = document.createElement('option');
    x2.value = "Calopsita";
    x2.innerHTML = "Calopsita";
    Raca.appendChild(x2);

    var x3 = document.createElement('option');
    x3.value = "Diamante de Gould";
    x3.innerHTML = "Diamante de Gould";
    Raca.appendChild(x3);
    
    var x4 = document.createElement('option');
    x4.value = "Manon";
    x4.innerHTML = "Manon";
    Raca.appendChild(x4);

    var x5 = document.createElement('option');
    x5.value = "Periquito";
    x5.innerHTML = "Periquito";
    Raca.appendChild(x5);
}
} 

