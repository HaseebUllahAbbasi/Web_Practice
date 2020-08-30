var events = require('events');

var eventEmitter = new events.EventEmitter();
eventEmitter.on('clicked',function(arg)
{
    console.log(arg+' is clicked');
}

);
 eventEmitter.emit("clicked",'button1');