var fs = require('fs');

var readStream = fs.createReadStream('file.txt','utf8');
readStream.on('data',function(chunk)
{
    console.log('-------------------');
    console.log(chunk);
}
);
readStream.on('end',function()
{
    console.log('------------End------------');

});