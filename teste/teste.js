<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura de Arquivo playerlevel.dat</title>
</head>
<body>
    <input type="file" id="fileInput">
    <button onclick="readFile()">Carregar Arquivo</button>
    <pre id="output"></pre>

    <script src="nbt.js"></script>
    <script>
        function readFile() {
            const fileInput = document.getElementById('fileInput');
            const file = fileInput.files[0];
            
            const reader = new FileReader();
            reader.onload = function(event) {
                const buffer = event.target.result;
                nbt.parse(buffer, function(error, result) {
                    if (error) {
                        console.error('Erro ao ler arquivo:', error);
                        return;
                    }
                    const output = document.getElementById('output');
                    output.textContent = JSON.stringify(result, null, 2);
                });
            };
            reader.readAsArrayBuffer(file);
        }
    </script>
</body>
</html>
