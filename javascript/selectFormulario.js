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

    var adicionarRequisitoF = document.getElementById("adicionarRequisito");
    var removerRequisitoF = document.getElementById("removerRequisito");
    var containerRequisitosF = document.getElementById("containerRequisitos");
    var contadorF = 0;

    var adicionarRequisitoG = document.getElementById("adicionarRequisitoGuia");
    var removerRequisitoG = document.getElementById("removerRequisitoGuia");
    var containerRequisitosG = document.getElementById("containerRequisitosGuia");
    var contadorG = 0;



    adicionarRequisitoF.addEventListener("click", function(){
        contadorF++;

        console.log("Tipo de formulario selecionado: ", tipoFormularioSelecionado);

        var newInput = document.createElement("input");
        var newParagraph = document.createElement("p");

        newParagraph.className = "numeradorRequisitos";
        newParagraph.innerHTML = contadorF + ".";
        newInput.type = "text";
        newInput.name = "requisito" + contadorF;
        newInput.placeholder = "Requisito " + contadorF;
        newInput.className = "inputRequisito";
        document.getElementById("contadorInput").value = contadorF;
        console.log(contadorF);

        containerRequisitosF.appendChild(newInput);

        const novaDiv = document.createElement("div");
        novaDiv.className = "alinhamentoRequisitos";
        
        novaDiv.appendChild(newParagraph);
        novaDiv.appendChild(newInput);

        containerRequisitosF.appendChild(novaDiv);
    });

    removerRequisitoF.addEventListener("click", function(){
        
        var requisitoInputs = containerRequisitosF.querySelectorAll(".alinhamentoRequisitos");
        var lastRequistoInput = requisitoInputs[requisitoInputs.length - 1];

        console.log("Tipo de formulario selecionado: ", tipoFormularioSelecionado);

        if(lastRequistoInput){
            containerRequisitosF.removeChild(lastRequistoInput);
            contadorF--;

            document.getElementById("contadorInput").value = contador;
            console.log(contadorF);

        }

    });


    adicionarRequisitoG.addEventListener("click", function(){
        contadorG++;

        console.log("Tipo de formulario selecionado: ", tipoFormularioSelecionado);

        var newInput = document.createElement("input");
        var newParagraph = document.createElement("p");

        newParagraph.className = "numeradorRequisitos";
        newParagraph.innerHTML = contadorG + ".";
        newInput.type = "text";
        newInput.name = "requisito" + contadorG;
        newInput.placeholder = "Requisito " + contadorG;
        newInput.className = "inputRequisito";
        document.getElementById("contadorInput").value = contadorG;
        console.log(contadorG);

        containerRequisitosG.appendChild(newInput);

        const novaDiv = document.createElement("div");
        novaDiv.className = "alinhamentoRequisitos";
        
        novaDiv.appendChild(newParagraph);
        novaDiv.appendChild(newInput);

        containerRequisitosG.appendChild(novaDiv);
    });

    removerRequisitoG.addEventListener("click", function(){
        
        var requisitoInputs = containerRequisitosG.querySelectorAll(".alinhamentoRequisitos");
        var lastRequistoInput = requisitoInputs[requisitoInputs.length - 1];

        console.log("Tipo de formulario selecionado: ", tipoFormularioSelecionado);

        if(lastRequistoInput){
            containerRequisitosG.removeChild(lastRequistoInput);
            contadorG--;

            document.getElementById("contadorInput").value = contador;
            console.log(contadorG);

        }

    });

    

});



