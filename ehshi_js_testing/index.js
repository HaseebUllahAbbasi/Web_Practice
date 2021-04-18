"use strict";
/*
* Application Programming Coursework 1
*
* If you open `index.html` in your browser you will see
* a series of unit tests. The challenge is to make all of these
* tests pass, similar to your worksheets.
*
* All code you write must be contained within this file.
* Do not modify `tests.js` (although you should read it to see
* exactly what we are testing)
*
* For the first two tests, we have started the functions for you.
* For the subsequent tests, you will need to write them in this file
* yourself.
*
* Remember to make regular backups of your work.
*
* ALL WORK MUST BE YOUR OWN.
*
* If you do not attempt the advanced challenge, your maximum possible
* mark will be 75% for this coursework.
*
* This assessment is worth 50% of your overall module mark.
*/

// modify these functions
// ...

function id () {
  return 'UP960844';
}

function easyStart () {
}

/**
 * Don't delete me, you'll need me later :)
 */
function numToArray(limit) {
  let result = [];
  for (let i=1; i<=limit; i=i+1) {
    result.push(i)
  }
  return result;
}

// add the remaining functions here
// ...

function uniqueWords(str)
{
    str = str.split(" ");
    var unique = [];
    for (var j = 0; j < str.length; j++)
    {
        var char = str[j];

        var temp = char;
            //console.log(char)
        var count = 0 ;
        for ( var i = 0; i < j+1; i++)
        {
            if(char.toLowerCase() ==str[i].toLowerCase() )
            {
                count++;
            }
        }
        if(count==1)
        {
            unique.push(temp.toLowerCase());
        }

    }
    console.log(unique);
    return unique;
}
function honours(mark)
{
    if(mark>=70&& mark<=100)
        return "First";
    else if (mark>=60)
        return "Upper Second";
    else if (mark>=50)
        return "Lower Second";
    else if (mark>=40)
        return "Third";
    else
        return "Fail";
}
function clickAttacher(selector,cn)
{
    var that = this;
    var selector_1 = "#" + cn;
      on("click", function(e) {
        e.clickAttacher = that;
        that.handleClick(e);
    });
}

handleClick = function(e) {
    console.log("click attacher was instance of : " + e.clickAttacher.constructor.name); // BtnMgr
    console.log("button id: " +  e.target.id); // xxx
    console.log("msg: " + e.clickAttacher.msg); // Hello World!
};

uniqueWords("The THE thE the tHE")