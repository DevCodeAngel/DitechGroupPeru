document.getElementById('config').addEventListener('click', function(event) {
    event.preventDefault(); // Evita la acciÃ³n por defecto del enlace
    var configDiv = document.getElementById('configDiv');
    if (configDiv.style.display === 'none' || configDiv.style.display === '') {
        configDiv.style.display = 'block';
    } else {
        configDiv.style.display = 'none';
    }
 });


 document.getElementById('btnMenu').addEventListener('click', function() {
    // Selecciona ambos elementos
    var sidebar = document.getElementById('sidebar');
    var contentRight = document.getElementById('content-rigth');
    var contentMain = document.getElementById('content-main');
    var header = document.getElementById('header');

    // Alterna la clase 'collapsed' para ambos elementos
    sidebar.classList.toggle('collapsed');
    contentRight.classList.toggle('collapsed');
    contentMain.classList.toggle('collapsed');
    header.classList.toggle('collapsed');
});


