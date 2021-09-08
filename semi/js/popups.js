var overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnCerrarPopup.addEventListener('click', function(){
    overlay.classList.add('desactive');
    popup.classList.add('desactive');
})