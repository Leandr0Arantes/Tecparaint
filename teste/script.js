// script.js
function mostrarCategorias() {
    document.getElementById('categorias-lista').style.display = 'block';
}

function selecionarCategoria(categoria) {
    document.getElementById('categorias').value = categoria;
    document.getElementById('categorias-lista').style.display = 'none';
}
