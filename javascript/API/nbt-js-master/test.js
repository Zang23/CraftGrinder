
var fs = require('fs'),
    nbt = require('./nbt');


    var data = fs.readFileSync('../file.js');
    nbt.parse(data, function (error, data) {
        if (error) { throw error; }

        /*var teste = data.value.Data.SpawnX;*/
        /*console.log(data.value.Data);*/
        console.log(data);
        /*var teste = data.value.Data;
        console.log(teste);*/
    });
    

