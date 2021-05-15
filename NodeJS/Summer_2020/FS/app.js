var fs = require('fs')
var read_string = fs.readFileSync('test.txt','utf8') // if we don't specify  the utf 8 then to String will be used to print the content of file in word instead of ascii
console.log(read_string);
fs.writeFileSync('Test2.txt',read_string);
