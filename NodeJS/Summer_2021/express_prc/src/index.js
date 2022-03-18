 const express = require('express')
// import express from 'express';
const app = express();
const myPromise = new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve('foo');
    }
    , 300);
  });
app.get("/",(req,res)=>{
    res.writeHead(200,{'Content-Type':'text/html'})
    res.write('<div>Home</div>');
    res.end("<div>Default</div>");
})
app.get("/home",(req,res)=>{
    res.writeHead(200,{'Content-Type':'text/html'})
    res.write('<div>Home</div>');
    res.end()
})

app.get("/about",(req,res)=>{
    res.writeHead(200,{'Content-Type':'text/html'})
  
    res.end("<div>About</div>");
})

const port  =  process.env.PORT || 8080
app.listen(port,()=>
{
    console.log("https://localhost:3000");
})
