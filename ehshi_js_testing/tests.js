"use strict";

QUnit.config.reorder = false;
const { test } = QUnit;


test(
  "Change the `id` method in `index.js` to return your student ID.",
    function(assert) {
      assert.ok(
        id(),
        "The function must return something."
      );
      assert.notOk(
        id() == "Replace This With Your Student ID",
        "This test will pass as soon as the id function returns anything other than the default value.  You must make sure it returns your student ID!"
      );
      assert.notOk(
        id() == "UP654321",
        "This second test will pass as soon as the id function returns anything other than the default value."
      );
    }
);


test(
  `Easy Start: Complete the 'easyStart' function so that it always
  returns true.`, (assert) => {

  if (!assert.functionExists('easyStart')) return;

  assert.strictEqual(
    easyStart(),
    true,
    `The 'easyStart' function should return true
     when passed no parameters.`
  );

  assert.strictEqual(
    easyStart("this should be ignored"),
    true,
    `The 'easyStart' function specifies no arguments
     so it should ignore any that are passed.`
  );

});

test(
  `Greetings: Create a 'greet' function that accepts a 'name' parameter
  and returns the string "Hello <name> how are you?".`, (assert) => {

  if (!assert.functionExists('greet', ["name"])) return;

  assert.strictEqual(
    greet("Tricia"),
    "Hello Tricia how are you?",
    `Calling greet("Tricia") should return
     "Hello Tricia how are you?"`
  );

  assert.strictEqual(
    greet("Zaphod"),
    "Hello Zaphod how are you?",
    `Calling greet("Zaphod") should return
     "Hello Zaphod how are you?"`
  );

  assert.strictEqual(
    greet(),
    "Hello mystery person how are you?",
    `Calling greet() should return
     "Hello mystery person how are you?"`
  );

});


test(

  `Palindrome:
  Create a function 'palindrome' that accepts two parameters:
  a 'candidate' string parameter, and an 'ignore' boolean. The
  function should return true if the string provided is a
  palindrome. If the second parameter is true, whitespace
  must be ignored by the test, so e.g. both 'a ha' and 'abb a'
  would be recognised as palindromes.`,

  function (assert) {

    if (!assert.functionExists('palindrome',['candidate', 'ignore'])) return;

    try {
      assert.equal(
        palindrome(),
        false,
        "Passing no string to the function should always return false."
      );
    } catch (e) {
      e.stackTrace = String(e.stack);
      assert.notOk(e, "Passing no string to the function should always return false.");
    }

    assert.equal(
      palindrome(""),
      false,
      "An empty string cannot be a palindrome for there is no forwards nor backwards."
    );

    assert.equal(
      palindrome("A"),
      true,
      "Single characters are palindromes"
    );

    assert.equal(
      palindrome("ABBA"),
      true,
      "Palindromes may have an even number of characters (e.g. 4)."
    );

    assert.equal(
      palindrome("ABB A", true),
      true,
      "Palindromes may have an even number of characters (e.g. 4) and spaces if the second parameter is true."
    );

    assert.equal(
      palindrome("EYE"),
      true,
      "Palindromes may have an odd number of characters (e.g. 3)."
    );

    assert.equal(
      palindrome("egad a base tone denotes a bad age"),
      false,
      "If a sentence has the letters mirrored but has different spaces, then it's not a pure palindrome."
    );

    assert.equal(
      palindrome("egadabasetonedenotesabadage"),
      true,
      "... and now we test the same characters without the white space present."
    );

    assert.equal(
      palindrome("egad a base tone denotes a bad age", true),
      true,
      "Now let's test the same sentence as before, but this time we ignore the whitespace... its characters *are* indeed palindromic."
    );

    assert.equal(
      palindrome("this is not a palindrome"),
      false,
      "Not all sentences are palindromes, obviously."
    );
  }
);

test(
  `Numbers To Array: Change the 'numToArray' function so
  that instead of creating an array of numbers
  from 1 to 'limit', it creates an array of
  numbers counting down from 'limit' to 1.`, (assert) => {

  if (!assert.functionExists( 'numToArray', ['limit'] )) return;

  assert.deepEqual(
    numToArray(5),
    [5, 4, 3, 2, 1],
    "Calling numToArray(5) should return [5,4,3,2,1]."
  );

  assert.deepEqual(
    numToArray(1),
    [1],
    "Calling numToArray(1) should return [1]."
  );

  assert.deepEqual(
    numToArray(10),
    [10, 9, 8, 7, 6, 5, 4, 3, 2, 1],
    "Calling numToArray(10) should return [10,9,8,7,6,5,4,3,2,1]."
  );

});

test(
  `A Positive Sign: Create a 'sign' function that accepts one parameter 'x'
  and returns the string "positive" when x is above zero, "negative" when
  x is below zero and "neither" when x is exactly zero.`, (assert) => {

  if (!assert.functionExists('sign', ["x"])) return;

  assert.strictEqual(
    sign(9),
    "positive",
    `9 is positive, so return "positive"`
  );

  assert.strictEqual(
    sign(-2),
    "negative",
    `-2 is negative, so return "negative"`
  );

  assert.strictEqual(
    sign(-49.3),
    "negative",
    `If the first two tests work, this one should too!`
  );

  assert.strictEqual(
    sign(0),
    "neither",
    `In this test, zero is neither positive not negative.`
  );

  assert.strictEqual(
    sign(),
    "neither",
    `In this test, no parameter is passed.  An absence of number is neither positive nor negative.`
  );


});

test(
  `Say N Times: Write an 'nSay' function that accepts two parameters, a
  message 'msg' and a number 'n'.  nSay should return an array that
  contains n copies of the value of msg.`, (assert) => {

  if (!assert.functionExists('nSay', ["msg", "n"])) return;

  assert.deepEqual(
    nSay("hello", 1),
    ["hello"],
    `Calling nSay("hello",1) should return an array of one "hello".`
  );

  assert.deepEqual(
    nSay("badger", 3),
    ["badger", "badger", "badger"],
    `Calling nSay("badger",3) should return an
     array of three strings, each saying "badger".`
  );

});


test(
  `Word Count: Create a 'wordCount' function that accepts a string 'str'
  and counts how many words are in it.`, (assert) => {

  if (!assert.functionExists('wordCount', ["str"])) return

  assert.strictEqual(
    wordCount("The cat sat on the mat"),
    6,
    "'The cat sat on the mat' has 6 words."
  );

  assert.strictEqual(
    wordCount("a a a a a"),
    5,
    "`a` appears 5 times, so there are 5 words."
  );

});


test(
  `Character Count: Create a 'charCount' function that accepts a
  string 'str' and counts how many non-whitespace characters are
  in it.`, (assert) => {

  if (!assert.functionExists('charCount', ["str"])) return;

  assert.strictEqual(
    charCount("The cat sat on the mat"),
    17,
    "`The cat sat on the mat` contains 17 non-whitespace characters."
  );

  assert.strictEqual(
    charCount("a a a a a"),
    5,
    "`a` appears 5 times, so there are just 5 characters."
  );

  assert.strictEqual(
    charCount("            X"),
    1,
    "All spaces must be ignored."
  );

});


test(
  `Acronyms: Create an 'acronym' function that accepts a
  string 'str' of words and returns the acronym formed from the
  initial letter of each word.`, (assert) => {

  if (!assert.functionExists('acronym', ["str"])) return;

  assert.strictEqual(
    acronym("North Atlantic Treaty Organisation"),
    "NATO",
    `Given 'North Atlantic Treaty Organisation', the function should
    return the acronym 'NATO'.`
  );

  assert.strictEqual(
    acronym("Graphics Interchange Format"),
    "GIF",
    `The age-old animated image format GIF is an acronym of
     Graphics Interchange Format.`
  );

  assert.strictEqual(
    acronym("Self Contained Underwater Breathing Apparatus"),
    "SCUBA",
    "If the first two tests work, this one should too!"
  );

});



test(
  `Honours Classification: Create an 'honours' function that accepts
  a number 'mark' and returns a string that describes the level of
  honours degree associated with that mark.`, (assert) => {

  if (!assert.functionExists('honours', ['mark'])) return;

  assert.strictEqual(
    honours(70),
    "First",
    "Any mark of 70 or over is considered first class.  70 is a first."
  );

  assert.strictEqual(
    honours(99),
    "First",
    "Any mark of 70 or over is considered first class.  99 is a first."
  );

  assert.strictEqual(
    honours(68),
    "Upper Second",
    `Any mark of 60 or over (but less than 70) is considered
     upper second class.`
  );

  assert.strictEqual(
    honours(60),
    "Upper Second",
    `Any mark of 60 or over (but less than 70) is considered
     upper second class.`
  );

  assert.strictEqual(
    honours(55),
    "Lower Second",
    `Any mark of 50 or over (but less than 60) is considered
     lower second class.`
  );

  assert.strictEqual(
    honours(45),
    "Third",
    "Any mark of 40 or over (but less than 50) is considered third class."
  );

  assert.strictEqual(
    honours(40),
    "Third",
    "Any mark of 40 or over (but less than 50) is considered third class."
  );

  assert.strictEqual(
    honours(38),
    "Fail",
    "Any mark below 40 is considered a fail."
  );

});



test(
  `Unique Words: Create a 'uniqueWords' function that accepts a
  string 'str' and returns an array of all the unique words in
  that string.`, (assert) => {

  if (!assert.functionExists('uniqueWords', ['str'])) return;

  assert.deepEqual(
    uniqueWords("the cat sat on the mat"),
    ["the", "cat", "sat", "on", "mat"],
    `There are two instances of 'the' in 'the cat sat on the mat' - only
     one 'the' should be in the resulting array.`
  );

  assert.deepEqual(
    uniqueWords("a a a a a"),
    ["a"],
    `'a' appears 5 times and there are no other words, so there should be
     an array of just 'a'`
  );

  assert.deepEqual(
    uniqueWords("there they're their"),
    ["there", "they're", "their"],
    "there, they're, and their are three different words."
  );

});


test(
  `Unique Words II: Mixed Case Matching: The 'uniqueWords' function
  should treat uppercase and lowercase letters as if they are the
  same letter, and only return lowercase letters.`, (assert) => {

  assert.deepEqual(
    uniqueWords("The cat sat on the mat"),
    ["the", "cat", "sat", "on", "mat"],
    `There are two instances of 'the' in 'The cat sat on the mat' - only
     one 'the' should be in the resulting array.`
  );

  assert.deepEqual(
    uniqueWords("The THE thE the tHE"),
    ["the"],
    `There are multiple instances of 'the' in this example,
     each with different capitalisation.  All represent the
     same word, so the resulting array should contain only
     one lowercase instance of 'the'.`
  );

});




test(
  `Click Attacher:

  Create a function called 'clickAttacher' that accepts
  two parameters, a CSS selector 'selector' and a
  classname 'cn'.

  The function should add an event listener to all the
  selected elements identified by the selector.

  You must also create an anonymous (fat arrow) function
  that is invoked by the 'click' event.  It should toggle
  the provided classname on the clicked element.`,

  function (assert) {

    if (!assert.functionExists('clickAttacher', ['selector','cn'])) return;

    assert.equal(
      window.clickables.firstElementChild.classList.contains("red"),
      false,
      "Before we begin the FIRST elem has no `red` class."
    );

    assert.equal(
      window.clickables.firstElementChild.classList.contains("red"),
      false,
      "Before we begin the LAST elem has no `red` class."
    );

    clickAttacher("#clickables *", "red");

    assert.equal(
      window.clickables.firstElementChild.classList.contains("red"),
      false,
      "After attaching the first elem STILL has no `red` class."
    );

    // pretend to be a user clicking the first element.
    window.clickables.firstElementChild.dispatchEvent(new MouseEvent("click"));

    assert.equal(
      window.clickables.firstElementChild.classList.contains("red"),
      true,
      "After a click the first elem has the `red` class."
    );

    window.clickables.firstElementChild.dispatchEvent(new MouseEvent("click"));

    assert.equal(
      window.clickables.firstElementChild.classList.contains("red"),
      false,
      "After a second click the first elem must have no `red` class."
    );

    clickAttacher("span", "uop");

    if (window.nested6) {
      window.nested6.dispatchEvent(new MouseEvent("click"));
      assert.equal(
        window.nested6.classList.contains("uop"),
        true,
        "When this test works, every span on the page is clickable."
      );
    }
  }
);

test(
  `Write a drawChessBoard function that accepts one
   parameter 'canvas' which is a canvas.  It should
   draw an 8x8 chess board of #000 and #FFF squares.
   The top left corner should be a #FFF square.`, (assert) => {

    assert.functionExists( 'drawChessBoard', ['canvas'] );
    const board = document.querySelector("#board");
    let studentHappy = drawChessBoard(board);
    assert.ok( studentHappy, "This test passes when *you* decide it's finished (by returning true from your function).  We will visually check it." );

  }
);

test(
  `Advanced Challenge: You should complete the drawing of the chess board
  so that all the pieces are displayed in their starting layout.  You may
  use chess pieces from [1] or design your own by drawing them using canvas.
  If you use external images you must refer to them directly by URL,
  e.g. [2], because you cannot include any additional files in your
  submission. Make sure the queens are on their own colour square.  Think
  about how you can most intelligently and efficiently place the pieces in
  the appropriate places.

  [1] https://commons.wikimedia.org/wiki/Category:PNG_chess_pieces/Standard_transparent
  [2] https://upload.wikimedia.org/wikipedia/commons/8/81/Chess_bdt60.png`,
  (assert) => {

  if (!assert.functionExists('playChess')) return;
  const board = document.querySelector("#board");
  let studentHappy = playChess(board);
  assert.ok( studentHappy, "This test passes when *you* decide it's finished (by returning true from your function).  We will visually check it." );

});

// it's reassuring to know you're reading this, so if you are,
// please react to the message below using :wrench: emoji.
// https://discord.com/channels/760155974467059762/760155974467059769/788014290195447832
