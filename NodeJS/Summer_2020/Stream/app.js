var fs = require('fs');

//var readStream = fs.createReadStream('file.txt','utf8');
var readStream = fs.createReadStream('file.txt');
readStream.setEncoding('utf8');
var writeStream = fs.createWriteStream('write_file.txt');
readStream.on('data',function(chunk)
{
    console.log('-------------------');
    //console.log(chunk);
    writeStream.write(chunk);
}
);
readStream.on('end',function()
{
    console.log('------------End------------');

});