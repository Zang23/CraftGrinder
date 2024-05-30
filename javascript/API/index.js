const fs = require('fs');
const nbt = require('./nbt-js-master/nbt');
const express = require('express');
const mysql = require('mysql');

const app = express();

// Configurações de conexão com o banco de dados
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'testeid'
});

app.listen(8796, () => console.log('server running'));

app.get('/api/:id', async (req, res) => {
    try {
        const userId = req.params.id;

        // Consulta SQL para obter o email do usuário com base no ID
        const sqlget = 'SELECT file FROM usuarios WHERE id = ?';
        const sqlpost = 'UPDATE usuarios SET vetorsql = ? WHERE id = ?'

        // Executar a consulta SQL
        connection.query(sqlget, [userId], (error, results, fields) => {
            if (error) {
                console.error('Erro ao executar a consulta:', error);
                return;
            }

            // Verificar se encontrou algum resultado
            if (results.length > 0) {
                const dir = results[0].file;
                if (fs.existsSync(dir)) {
                var data = fs.readFileSync(dir);
                nbt.parse(data, function (error, data) {
                    if (error) { throw error; }

                    console.log(data.value.Inventory.value.value);
                    
                    const vetor = data.value.Inventory.value.value;

                    const string = JSON.stringify(vetor);  

                    let regex = /"type":"[^"]*",|"value":/gi;
                    let stringcut = string.replace(regex, '');   
                    stringcut = stringcut.replace(/[{}]/g, '');
                    stringcut = stringcut.replace(/,"Slot/g, '], ["Slot');
                    stringcut = stringcut.replace(/":/g, '" => ');
                    stringcut = stringcut.replace(/$/g, ';');
                    stringcut = stringcut.replace(/Slot/g, 'posicaoInventario');
                    stringcut = stringcut.replace(/id/g, 'itemNome');
                    stringcut = stringcut.replace(/Count/g, 'quantidade');
                    stringcut = stringcut.replace(/Damage/g, 'danoAcumulado');
                    res.send(stringcut);
                    connection.query(sqlpost, [stringcut, userId], (error, results, fields) => {
                        if (error) {
                            console.error('Erro ao enviar a string para o usuário:', error);
                            return;
                        }
                    });

                });
            }else {
                console.error('O arquivo não existe:', dir);
            }
                
                 /*  fs.unlink(dir, (err) => {
                    if (err) {
                        console.error('Ocorreu um erro ao deletar o arquivo:', err);
                        return;
                    }
                    console.log('Arquivo deletado com sucesso!');
                });  */
            }   
            else {
                console.log('Usuário não encontrado.');
            }   
        });
  
        /* res.redirect("https://youtube.com"); */
        
    } catch (error) {
        console.error('Erro:', error);
        res.status(500).send('Erro interno do servidor');
    }
});