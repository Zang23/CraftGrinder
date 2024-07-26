var tipoFormularioSelecionado = "";
const tipos = ['Farm', 'Guia', 'Item', 'Maquina'];
document.getElementById('selectTipoFormulario').addEventListener('change', function () {
    var selecionado = this.value;
    tipoFormularioSelecionado = this.value;


    document.getElementById('formularioAtualizacao').style.display = 'none';
    document.getElementById('formularioFarm').style.display = 'none';
    document.getElementById('formularioItem').style.display = 'none';
    document.getElementById('formularioGuia').style.display = 'none';
    document.getElementById('formularioMaquina').style.display = 'none';


    document.getElementById('formulario' + selecionado.charAt(0).toUpperCase() + selecionado.slice(1)).style.display = "block";

})

document.addEventListener("DOMContentLoaded", function () {


    const tipos = ['Farm', 'Guia', 'Item', 'Maquina'];
    tipos.forEach(tipo => {
        let contador = 0;
        const adicionar = document.getElementById(`adicionarRequisito${tipo}`);
        const remover = document.getElementById(`removerRequisito${tipo}`);
        const removerTudo = document.getElementById(`removerTodosRequisito${tipo}`);
        const container = document.getElementById(`containerRequisitos${tipo}`);

        adicionar.addEventListener("click", () => {
            const novaDiv = document.createElement("div");
            novaDiv.className = "alinhamentoRequisitos";
            novaDiv.innerHTML = `
                <p class="numeradorRequisitos">${++contador}.</p>
                <input type="text" name="requisito${contador}" placeholder="Requisito ${contador}" class="inputRequisito">
            `;
            container.appendChild(novaDiv);

            console.log(contador);
        });

        remover.addEventListener("click", () => {
            const last = container.lastElementChild;
            if (last) {
                container.removeChild(last);
                contador--;
                console.log(contador);
            }
        });
        removerTudo.addEventListener("click", ()=>{
            container.innerHTML = '';
        })
    });

    const opcoes = document.getElementsByClassName("opcao_content");

    Array.from(opcoes).forEach((opcao) => {
        const imagemId = 'inputId' + opcao.id.replace('formulario', '');
        const imagem = document.getElementById(imagemId);
        imagem.addEventListener('change', () => {
            const iconeImagem = document.createElement("img");
            imagemEnviada = imagem.files[0];

            const reader = new FileReader();
            reader.onload = function (event) {
                imagemsrc = event.target.result;

                iconeImagem.setAttribute('src', imagemsrc);
                iconeImagem.setAttribute('class', 'imagem-capa');
                iconeImagem.setAttribute('id', 'capaImagem-' + opcao.id.replace('formulario', ''));
                const newdiv = document.createElement("div");
                newdiv.setAttribute('class', 'container-imagem-capa');
                newdiv.setAttribute('id', 'capaImagemContainer-' + opcao.id.replace('formulario', ''));
                const imagemAnterior = document.getElementById('capaImagem-' + opcao.id.replace('formulario', ''));
                const containerImagem = document.getElementById('capaImagemContainer-' + opcao.id.replace('formulario', ''));

                if (imagemAnterior != null) {
                    document.getElementById('containerRequisitos' + opcao.id.replace('formulario', '')).removeChild(containerImagem);
                }
                console.log('containerRequisitos' + opcao.id.replace('formulario', ''));
                document.getElementById('containerRequisitos' + opcao.id.replace('formulario', '')).appendChild(newdiv);

                newdiv.appendChild(iconeImagem);
            };
            reader.readAsDataURL(imagemEnviada);
        })
    })

})
 