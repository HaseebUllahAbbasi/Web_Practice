var http = require("http");

/*
var func = function(req,res)
{

}

http.createServer(func)
*/
http.createServer(function (req,res)
{
    res.end("Hi There");
}).listen(3000);

console.log("the server is running");