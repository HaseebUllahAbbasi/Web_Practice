var events = require('events');
var eventEmitter = new events.EventEmitter();

//Create an event handler:
var myEventHandler = function () {
  console.log('I hear a scream!');
}
var call_me = function () {
    console.log('mujhe kion bulaya');
  }
  

//Assign the event handler to an event:
eventEmitter.on('scream', myEventHandler);
eventEmitter.on('bula', call_me);

//Fire the 'scream' event:
eventEmitter.emit('scream');
eventEmitter.emit('bul')