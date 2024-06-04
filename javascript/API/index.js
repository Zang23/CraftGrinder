var fs = require('fs'),
    nbt = require('./nbt-js-master/nbt');
const app = require('express')(),
    mysql = require('mysql'),

// Configurações de conexão com o banco de dados
     connection = mysql.createConnection({
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

                var data = fs.readFileSync(dir);
                nbt.parse(data, function (error, data) {
                    if (error) { throw error; }

                    console.log(data.value.Inventory.value.value);
                    
                    const vetor = data.value.Inventory.value.value;

                    const string = JSON.stringify(vetor);  

                    /*let regex = /"type":"[^"]*",|"value":/gi;
                    let stringcut = string.replace(regex, ''); */  

                    res.send(string);

                        connection.query(sqlpost, [stringcut, userId], (error, results, fields) => {
                        if (error) {
                            console.error('Erro ao enviar a string para o usuário:', error);
                            return;
                        }
                    });

                });
                 /* fs.unlink(dir, (err) => {
                    if (err) {
                      console.error('Ocorreu um erro ao deletar o arquivo:', err);
                      return;
                    }
                    console.log('Arquivo deletado com sucesso!');
                  }); */
            } else {
                console.log('Usuário não encontrado.');
            } 
            
        });

    } catch (error) {
        console.error('Erro:', error);
        res.status(500).send('Erro interno do servidor');
    }

});

