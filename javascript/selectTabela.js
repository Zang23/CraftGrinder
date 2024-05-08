document.getElementById('selectTabela').addEventListener('change', function(){
    var selecionado = this.value;

    document.getElementById('tabelaFarm').style.display='none';
    document.getElementById('tabelaGuia').style.display='none';
    document.getElementById('tabelaMaquina').style.display='none';
    document.getElementById('tabelaItem').style.display='none';
    document.getElementById('tabelaAtualizacao').style.display='none';

    document.getElementById('tabela' + selecionado.charAt(0).toUpperCase() + selecionado.slice(1)).style.display="block";
    
})