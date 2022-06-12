function AparecerOpcoes(){

    var liPata = document.getElementById('liPata');
    var PataIcone = document.querySelector('.OlSubMenu');

    
    
      if(PataIcone.style.display === 'block') {
          PataIcone.style.display = 'none';
      } else {
          PataIcone.style.display = 'block';
      }
    
}
function TirarPublUsu(){
    var publ = document.getElementById('postUsu');
    var x = document.getElementById('tiraAbr');
    if(publ.style.display != 'none'){
        publ.style.display = 'none';
        x.style.pointerEvents = 'none';
    }
    else{
        publ.style.display = '';
        x.style.pointerEvents = '';
    }
}

function TirarPublAbrigo(){
    var publ = document.getElementById('postAbrigo');
    var x = document.getElementById('tiraUsu');
    if(publ.style.display != 'none'){
        publ.style.display = 'none';
        x.style.pointerEvents = 'none';
    }
    else{
        publ.style.display = '';
        x.style.pointerEvents = '';
    }
}