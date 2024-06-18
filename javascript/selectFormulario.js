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
    var containerRequisitosF_ = document.getElementById("containerRequisitos2");
    var contadorF = 0;

    var adicionarRequisitoG = document.getElementById("adicionarRequisitoGuia");
    var removerRequisitoG = document.getElementById("removerRequisitoGuia");
    var containerRequisitosG = document.getElementById("containerRequisitosGuia");
    var contadorG = 0;

    var adicionarRequisitoI = document.getElementById("adicionarRequisitoItem");
    var removerRequisitoI = document.getElementById("removerRequisitoItem");
    var containerRequisitosI = document.getElementById("containerRequisitosItem");
    var contadorI = 0;

    var adicionarRequisitoM = document.getElementById("adicionarRequisitoMaquina");
    var removerRequisitoM = document.getElementById("removerRequisitoMaquina");
    var containerRequisitosM = document.getElementById("containerRequisitosMaquina");
    var contadorM = 0;



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
        document.getElementById("contadorInputF").value = contadorF;
        console.log(contadorF);


        
        
        const novaDiv = document.createElement("div");
        novaDiv.className = "alinhamentoRequisitos";
        
        novaDiv.appendChild(newParagraph);
        novaDiv.appendChild(newInput);

        containerRequisitosF.appendChild(novaDiv);

        /*if (contadorF <= 4){
            containerRequisitosF.appendChild(novaDiv);
        }
        else{
            containerRequisitosF_.appendChild(novaDiv);
        }*/
    });

    removerRequisitoF.addEventListener("click", function(){
        
        var requisitoInputs = containerRequisitosF.querySelectorAll(".alinhamentoRequisitos");
        var lastRequistoInput = requisitoInputs[requisitoInputs.length - 1];

        console.log("Tipo de formulario selecionado: ", tipoFormularioSelecionado);

        if(lastRequistoInput){
            containerRequisitosF.removeChild(lastRequistoInput);
            contadorF--;


            document.getElementById("contadorInput").value = contadorF;
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
        document.getElementById("contadorInputG").value = contadorG;
        console.log(contadorG);




        

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

            document.getElementById("contadorInput").value = contadorG;
            console.log(contadorG);

        }

    });


    adicionarRequisitoI.addEventListener("click", function(){
        contadorI++;

        console.log("Tipo de formulario selecionado: ", tipoFormularioSelecionado);

        var newInput = document.createElement("input");
        var newParagraph = document.createElement("p");

        newParagraph.className = "numeradorRequisitos";
        newParagraph.innerHTML = contadorI + ".";
        newInput.type = "text";
        newInput.name = "requisito" + contadorI;
        newInput.placeholder = "Requisito " + contadorI;
        newInput.className = "inputRequisito";
        document.getElementById("contadorInputI").value = contadorI;
        console.log(contadorI);

        

        const novaDiv = document.createElement("div");
        novaDiv.className = "alinhamentoRequisitos";
        
        novaDiv.appendChild(newParagraph);
        novaDiv.appendChild(newInput);

        containerRequisitosI.appendChild(novaDiv);
    });

    removerRequisitoI.addEventListener("click", function(){
        
        var requisitoInputs = containerRequisitosI.querySelectorAll(".alinhamentoRequisitos");
        var lastRequistoInput = requisitoInputs[requisitoInputs.length - 1];

        console.log("Tipo de formulario selecionado: ", tipoFormularioSelecionado);

        if(lastRequistoInput){
            containerRequisitosI.removeChild(lastRequistoInput);
            contadorI--;

            document.getElementById("contadorInput").value = contadorI;
            console.log(contadorI);

        }

    });


    adicionarRequisitoM.addEventListener("click", function(){
        contadorM++;

        console.log("Tipo de formulario selecionado: ", tipoFormularioSelecionado);

        var newInput = document.createElement("input");
        var newParagraph = document.createElement("p");

        newParagraph.className = "numeradorRequisitos";
        newParagraph.innerHTML = contadorM + ".";
        newInput.type = "text";
        newInput.name = "requisito" + contadorM;
        newInput.placeholder = "Requisito " + contadorM;
        newInput.className = "inputRequisito";
        document.getElementById("contadorInputM").value = contadorM;
        console.log(contadorM);

        

        const novaDiv = document.createElement("div");
        novaDiv.className = "alinhamentoRequisitos";
        
        novaDiv.appendChild(newParagraph);
        novaDiv.appendChild(newInput);

        containerRequisitosM.appendChild(novaDiv);
    });

    removerRequisitoM.addEventListener("click", function(){
        
        var requisitoInputs = containerRequisitosM.querySelectorAll(".alinhamentoRequisitos");
        var lastRequistoInput = requisitoInputs[requisitoInputs.length - 1];

        console.log("Tipo de formulario selecionado: ", tipoFormularioSelecionado);

        if(lastRequistoInput){
            containerRequisitosM.removeChild(lastRequistoInput);
            contadorM--;

            document.getElementById("contadorInput").value = contadorM;
            console.log(contadorM);

        }

    });
});




