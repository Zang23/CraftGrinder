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
        removerTudo.addEventListener("click", () => {
            container.innerHTML = '';
        })
    });

   // Obtém todos os elementos com a classe "opcao_content"
const opcoes = document.getElementsByClassName("opcao_content");

Array.from(opcoes).forEach((opcao) => {
    const idatual = opcao.id.replace('formulario', '');

    // Adiciona o listener para o input de imagem de capa
    const imagemIdCapa = 'inputId' + idatual;
    const imagemCapa = document.getElementById(imagemIdCapa);
    if (imagemCapa) {
        imagemCapa.addEventListener('change', () => {
            simboloImagem(imagemCapa, idatual, imagemIdCapa);
        });
    }

    // Adiciona o listener para o input de imagens do artigo
    const imagensIdArtigo = 'inputImagens' + idatual;
    const imagensArtigo = document.getElementById(imagensIdArtigo);
    if (imagensArtigo) {
        imagensArtigo.addEventListener('change', () => {
            simboloImagem(imagensArtigo, idatual, imagensIdArtigo);
        });
    }
});

function simboloImagem(arquivo, opcao, idNew) {
    const imagemEnviada = arquivo.files;
    const quantidade = imagemEnviada.length;

    // Verifica se a quantidade de arquivos é maior que zero
    if (quantidade > 0) {
        // Itera sobre todos os arquivos enviados
        for (let i = 0; i < quantidade; i++) {
            const reader = new FileReader();
            
            reader.onload = function (event) {
                const imagemsrc = event.target.result;

                // Cria novos elementos para cada imagem
                const iconeImagem = document.createElement("img");
                iconeImagem.setAttribute('src', imagemsrc);
                iconeImagem.setAttribute('class', 'imagem-capa');
                iconeImagem.setAttribute('id', idNew  + i);

                const newdiv = document.createElement("div");
                newdiv.setAttribute('class', idNew+' container-imagem-capa');
                newdiv.setAttribute('id', idNew+'Container-' + i);

                // Obtém o container onde a nova imagem será adicionada
                const containerRequisitos = document.getElementById('containerRequisitos' + opcao);

                if (containerRequisitos) {
                    // Remove o container de imagem antiga, se existir
                    const imagemAnterior = document.getElementById(idNew + i);
                    const containerImagem = document.getElementById(idNew+'Container-' + i);
                    if (containerImagem && imagemAnterior) {
                        containerRequisitos.removeChild(containerImagem);
                    }

                    // Adiciona o novo container e imagem
                    containerRequisitos.appendChild(newdiv);
                    newdiv.appendChild(iconeImagem);
                }
            };

            // Lê o arquivo como URL de dados
            reader.readAsDataURL(imagemEnviada[i]);
        }
    }
}

})
