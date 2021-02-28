window.globalErrors = [];
window.addEventListener('error', (e) => {
  window.globalErrors.push(e);
  e.stopImmediatePropagation();
});

// Credit: https://github.com/goatslacker/get-parameter-names
function getArgNames(fn = "") {
  const COMMENTS = /((\/\/.*$)|(\/\*[\s\S]*?\*\/))/mg;
  const DEFAULT_PARAMS = /=[^,)]+/mg;
  const FAT_ARROWS = /=>.*$/mg;
  const code = fn.toString()
    .replace(COMMENTS, '')
    .replace(FAT_ARROWS, '')
    .replace(DEFAULT_PARAMS, '');
  const result = code.slice(code.indexOf('(') + 1, code.indexOf(')'))
    .match(/([^\s,]+)/g);
  return result === null
    ? []
    : result;
}

// built from multiple lesser online examples
function ordinal(i) {
   const ord=['th','st','nd','rd'];
   const x=i%100;
   return i+(ord[(x-20)%10]||ord[x]||ord[0]);
}


QUnit.assert.functionExists = function (fnName, argNames = []) {
  const subject = window[fnName];
  const realArgNames = getArgNames(subject);
  let result = true;

  const createResultObject = {
    expected: `function`,
    actual: typeof subject,
    result: typeof subject === 'function',
    message: `Create a function called '${fnName}'.`
  };
  this.pushResult(createResultObject);
  result = result && typeof subject === 'function';

  for (let i=0; i<argNames.length; i++) {
    this.pushResult({
      expected: argNames[i],
      actual: realArgNames[i],
      result: argNames[i] === realArgNames[i],
      message: `The ${ordinal(i+1)} argument should be called '${argNames[i]}'.`
    });
    result = result && (argNames[i] === realArgNames[i]);
  }

  return result;
};


QUnit.assert.explain = function (message, result = true) {
  this.pushResult({ result, message });
};

if (window.globalErrors.length > 0) {
  test("Global Error", (assert) => {
    assert.explain(
      `There has been a global error, most probably a syntax error.
       Look in the Javascript console for details.`,
       false
     );
  });
}
