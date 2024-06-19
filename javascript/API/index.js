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
    database: 'dbcraftgrinder'
});
const porta = 8796;

app.listen(porta, () => console.log('servidor rodando em: http://localhost:' + porta + '/'));

app.get('/api/:id', async (req, res) => {
    try {
        const userId = req.params.id;

        // Consulta SQL para obter o email do usuário com base no ID
        const sqlget = 'SELECT inventarioClientes FROM tbclientes WHERE idCliente = ?';
        const sqlpost = 'UPDATE tbclientes SET vetorInventarioClientes = ? WHERE idCliente = ?'

        // Executar a consulta SQL
        connection.query(sqlget, [userId], (error, results, fields) => {
            if (error) {
                console.error('Erro ao executar a consulta:', error);
                return;
            }
            console.log(results);
            if (results.length > 0) {
                const dir = "../../html/usuario/"+results[0].inventarioClientes;
                if (fs.existsSync(dir)) {
                var data = fs.readFileSync(dir);
                nbt.parse(data, function (error, data) {
                    if (error) { throw error; }

                    console.log(data.value.Inventory.value.value);
                    
                    const vetor = data.value.Inventory.value.value;

                    const string = JSON.stringify(vetor);  

                    let regex = /"type":"[^"]*",|"value":/gi;
                    let stringcut = string.replace(regex, '').replace(/[{}]/g, '').replace(/,"count/g, '}, {"count').replace("[", '[{').replace(/minecraft:/g, "minecraft/").replace("]", '}]');
       

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
        
        res.redirect("http://localhost/CraftGrinder/html/");
        
    } catch (error) {
        console.error('Erro:', error);
        res.status(500).send('Erro interno do servidor');
    }
});