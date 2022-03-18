var fs = require('fs');

// don't check before delete , if not found then error
fs.unlinkSync('Test2.txt');
