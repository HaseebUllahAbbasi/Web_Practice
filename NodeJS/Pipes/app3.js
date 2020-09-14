// json data usage , passing to html and printing on page

var fs = require('fs');
var http = require('http');

http.createServer(function(req,res)
{
    console.log(req.url);
    if(req.url === '/home' || req.url === '/')
    {
        res.writeHead(200,{'Content-Type':'text/html'});
        fs.createReadStream('formExp2.html').pipe(res);

    }
    else if(req.url === '/about')
    {
        res.writeHead(200,{'Content-Type':'text/html'});
        fs.createReadStream('about.html').pipe(res);

    }
    else if(req.url === '/check' )
    {
        res.writeHead(200, { 'Content-Type': 'application/json' });
        var json_Object = {

            name: 'max',
            surname: 'tesar',
            age: 26


        };
        res.end(JSON.stringify(json_Object));
    }
    else 
    {
        res.writeHead(404,{'Content-Type':'text/html'});
        fs.createReadStream('404.html').pipe(res);

    }
    
    

}).listen(3000);

console.log("Server is running on http://127.0.0.1:3000/");