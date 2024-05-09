// Supondo que você tenha o código do NBT.js disponível

// Carrega o conteúdo do arquivo playerdata.nbt (exemplo)
var fs = require('fs'); // Se estiver no Node.js
var data = fs.readFileSync('playerdata.nbt'); // Leitura síncrona para simplificar o exemplo

// Parse do arquivo NBT
nbt.parse(data, function(error, result) {
    if (error) {
        console.error('Erro ao parsear arquivo NBT:', error);
        return;
    }

    // Verifica se o arquivo contém um jogador válido
    if (result.value.Player) {
        // Acessa o inventário do jogador
        var inventory = result.value.Player.value.Inventory;
        
        // Exibe o conteúdo do inventário
        console.log('Inventário do jogador:', inventory);
    } else {
        console.error('Arquivo NBT não contém dados de jogador.');
    }
});
