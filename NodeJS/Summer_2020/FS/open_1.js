var fs = require('fs');
  
console.log("Open file!");
  
// To open file in write and read mode,
// create file if doesn't exists.
fs.open('demo.txt', 'w+', function (err, data) {
   if (err) {
      return console.error(err);
   }
   console.log(data);
   console.log("File opened!!");     
});