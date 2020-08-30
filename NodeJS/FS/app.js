var fs = require('fs')
var read_string = fs.readFileSync('test.txt','utf8')
console.log(read_string);

fs.writeFileSync('Test2.txt',read_string);
