var path = require('path');
console.log(__dirname);
var filename = path.parse(__dirname);
console.log(filename);
console.log(__filename);
filename = path.parse(__filename);

console.log(filename);
