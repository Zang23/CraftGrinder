
var fs = require('fs'),
    nbt = require('./nbt');

    import arquivo from 'teste.html';

var data = fs.readFileSync('fixtures/bigtest.nbt.gz');
nbt.parse(data, function(error, data) {
    if (error) { throw error; }

    console.log(data.value.stringTest.value);
    /*console.log(data.value['nested compound test'].value);*/
});