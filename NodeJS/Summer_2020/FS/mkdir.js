var fs =  require('fs');

//fs.mkdirSync('node');

//fs.rmdirSync('node');

fs.mkdir('node',function() 
{
    fs.writeFile('node.txt',"this is msg");
});
 