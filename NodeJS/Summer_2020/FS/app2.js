var fs = require('fs')
var read_string = fs.readFileSync('test.txt','utf8',function(err,data)
    {
        if(err)
            return console.error(err);
        
        console.log(data);
    }
);
//console.log(read_string);
console.log('file is read');
//fs.writeFileSync('Test2.txt',read_string);

fs.writeFileSync('test23.txt',read_string,function(err,data)
    {
        if(err)
            return console.error(err);

        console.log("success");
}

);
