var tipoFormularioSelecionado = "";

document.getElementById('selectTipoFormulario').addEventListener('change', function() {
    var selecionado = this.value;
    tipoFormularioSelecionado = this.value;


    document.getElementById('formularioAtualizacao').style.display ='none';
    document.getElementById('formularioFarm').style.display ='none';
    document.getElementById('formularioItem').style.display='none';
    document.getElementById('formularioGuia').style.display='none';
    document.getElementById('formularioMaquina').style.display='none';
    

    document.getElementById('formulario' + selecionado.charAt(0).toUpperCase() + selecionado.slice(1))        .style.display="block";

})

document.addEventListener("DOMContentLoaded", function(){

    var adicionarRequisito = document.getElementById("adicionarRequisito");
    var removerRequisito = document.getElementById("removerRequisito");
    var containerRequisitos = document.getElementById("containerRequisitos");
    var contador = 0;



    adicionarRequisito.addEventListener("click", function(){
        contador++;

        console.log("Tipo de formulario selecionado: ", tipoFormularioSelecionado);

        var newInput = document.createElement("input");
        newInput.type = "text";
        newInput.name = "requisito" + contador;
        newInput.placeholder = "Requisito " + contador;
        newInput.className = "inputRequisito";
        document.getElementById("contadorInput").value = contador;
        console.log(contador);

        containerRequisitos.appendChild(newInput);
    });

    removerRequisito.addEventListener("click", function(){
        
        var requisitoInputs = containerRequisitos.querySelectorAll(".inputRequisito");
        var lastRequistoInput = requisitoInputs[requisitoInputs.length - 1];

        console.log("Tipo de formulario selecionado: ", tipoFormularioSelecionado);

        if(lastRequistoInput){
            containerRequisitos.removeChild(lastRequistoInput);
            contador--;

            document.getElementById("contadorInput").value = contador;
            console.log(contador);

        }

    });

});



