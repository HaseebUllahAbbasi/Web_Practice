
const express = require('express');

const  app = express();
app.use((req,res,next) => {
  console.log('First MiddleWare');
  next();
});

app.use((req,res,next) => {
  res.send('hello from the express response');
});

module.exports = app;
