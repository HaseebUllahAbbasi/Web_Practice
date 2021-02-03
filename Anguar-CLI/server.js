/*
const http = require('http');
let app = require('./backEnd/app.js');
const  server = http.createServer((req,res)=>{
  res.end('This is my first response')
});
server.listen(process.env.Port || 3000);

*/
const http = require('http');
const app = require('./backEnd/app.js');
const  server = http.createServer(app);
server.listen(process.env.Port || 3000);
