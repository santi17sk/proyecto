const descargar = document.querySelector('#descargar');
document.addEventListener('DOMContentLoaded', ()=>{
    descargar.addEventListener('click', obtenerDatos);
});

function obtenerDatos(e){
    const divArchivo = document.querySelector('#archivo');

    const xmlhttp = new XMLHttpRequest();
    xmlhttp.open('GET', './tablaCSV.php', true);
    xmlhttp.onreadystatechange = function(){
        if(this.readyState === 4 && this.status === 200){
            divArchivo.innerHTML = this.responseText;
        }
    }
    xmlhttp.send();
}