 const express = require('express')
// import express from 'express';
const app = express();

app.get("/",(req,res)=>{
    res.end("Home");
})
app.get("/home",(req,res)=>{
    res.end("Home");
})

app.get("/about",(req,res)=>{
    res.end("about");
})

app.listen(3000,()=>
{
    console.log("htts://localhost/3000");
})
