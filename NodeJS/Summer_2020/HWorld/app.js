var http = require("http");

/*
var func = function(req,res)
{

}

http.createServer(func)
*/
http.createServer(function (req,res)
{
    if(req.url=="/")
    res.end("Hi There");
    else if(req.url=="/home")
    res.end("Hi There home ");
    else res.end('404')
    
}).listen(3001);

console.log("the server is running");