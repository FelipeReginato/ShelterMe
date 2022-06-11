function trocaDate1() {
        document.getElementById('troca1').type = 'date';
        troca1.max = new Date().toISOString().split("T")[0];
}  
function trocaText1(){
    document.getElementById('troca1').type = 'text';
}
function trocaDate2() {
    document.getElementById('troca2').type = 'date';
    troca2.max = new Date().toISOString().split("T")[0];
}  
function trocaText2(){
document.getElementById('troca2').type = 'text';
}


var especiesRacas = {};
especiesRacas['Cachorro'] = ['Border Collie', 'Bulldog Francês', 'Golden Retriever', 'Pug', 'Yorkshire Terrier'];
especiesRacas['Gato'] = ['Angorá', 'British Shorthair', 'Himalaio', 'Maine Coon', 'Persa'];
especiesRacas['Pássaro'] = ['Canário', 'Calopsita', 'Diamante de Gould', 'Manon', 'Periquito'];

function MudaRaca(){


    var listaEspecies = document.getElementById("selectEspecie");
    var listaRacas = document.getElementById("selectRaca");
    var x = listaEspecies.options[listaEspecies.selectedIndex].value;
    while (listaRacas.options.length) {
        listaRacas.remove(0);
    }
    var especies = especiesRacas[x];
    if (especies) {
      var i;
      for (i = 0; i < especies.length; i++) {
        var especie = new Option(especies[i], especies[i]);
        listaRacas.options.add(especie);
      }
    }

} 

