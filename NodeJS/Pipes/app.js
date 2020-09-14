var fs = require('fs');
var http = require('http');

//var writeStream = fs.createWriteStream('file2.txt');

http.createServer(function(req,res){
    
    res.writeHead(200,{'Content-Type':'text/plain'});

    
    var readStream = fs.createReadStream('file.txt','utf8');
    readStream.pipe(res );
    

}).listen(3000);
console.log("Server is running on http://127.0.0.1:3000/");