document.getElementById('selectTipoFormulario').addEventListener('change', function() {
    var selecionado = this.value;


    document.getElementById('formularioAtualizacao').style.display ='none';
    document.getElementById('formularioFarm').style.display ='none';
    document.getElementById('formularioItem').style.display='none';
    document.getElementById('formularioGuia').style.display='none';
    document.getElementById('formularioMaquina').style.display='none';
    

    document.getElementById('formulario' + selecionado.charAt(0).toUpperCase() + selecionado.slice(1))        .style.display="block";

})

document.addEventListener("DOMContentLoaded", function(){

    var adicionarRequisito = document.getElementById("adicionarRequisito");
    var containerRequisitos = document.getElementById("containerRequisitos");
    var contador = 0;

    adicionarRequisito.addEventListener("click", function(){
        contador++;

        var newInput = document.createElement("input");
        newInput.type = "text";
        newInput.name = "campo " + contador;
        newInput.placeholder = "Requisito " + contador;
        newInput.className = "inputRequisito";


        containerRequisitos.appendChild(newInput);
    });
});