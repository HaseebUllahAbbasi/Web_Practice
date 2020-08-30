function ageInDays() {
  var dobY = prompt("what is your dob year ?");
  var age = (2020-dobY)*365;
  //console.log(age);
  //var h1 = document.createElement('h1');
  var text = ('<h1>You are '+age+' in days</h1>');
  //h1.setAttribute('id','age');
  //h1.appendChild(text);
  //console.log(h1);
  //document.getElementById('flex-box-result').appendChild(h1);
  document.getElementById('flex-box-result').innerHTML = text;
}
function reset()
{

  document.getElementById('flex-box-result').innerHTML = "";

}
