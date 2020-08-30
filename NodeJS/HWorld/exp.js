var  time = 0;
var timer =setInterval(function()
{
    time+=1;
    console.log("the time passed : "+time);
    if(time>5)
    {
        //prints when the execution is done
    console.log(__dirname);
    console.log(__filename);

        clearInterval(timer);
    }
}
,100);

/*
printed before the execution of the above code
console.log(__dirname);
console.log(__filename);
*/