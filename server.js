var server = require('http').Server();
var io = require('socket.io')(server,
{
  cors: {
    origin: "http://localhost:8000",
    methods: ["GET", "POST"],
    transports: ['websocket', 'polling'],
    credentials: true
  },
  allowEIO3: true
});
var Redis = require('ioredis');
var redis = new Redis();

//coding

redis.subscribe('chat');
redis.subscribe('connection');

let adminOnline=false;

let determineAdmin=function(message){
}

redis.on('message', function(channel, message) {
  message = JSON.parse(message);
  
  if(channel=="connection"){
    if(message.data.name=="admin"){
      adminOnline=message.data.connected;
      io.emit('isAdminOnline',adminOnline);
    }
  }
  
  io.emit(channel, message.data);
});

//final

const APP_PORT = process.env.NODE_APP_PORT || 3000

server.listen(APP_PORT, {
  cookie: false
}, () => {
  console.log("Server running at " + APP_PORT);
});

io.on('connection', function (socket) {
  io.emit('isAdminOnline',adminOnline);
  socket.on('disconnect', function() {
  });
});
