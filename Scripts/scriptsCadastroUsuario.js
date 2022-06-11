function trocaDate1() {
    document.getElementById('troca1').type = 'date';
    troca1.max = new Date().toISOString().split("T")[0];
}  
function trocaText1(){
document.getElementById('troca1').type = 'text';
}
