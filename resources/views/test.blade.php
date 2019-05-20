<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FiveOne Socket.io</title>
</head>
<body>
    <p id="power">0</p>
  {{-- <script src="{ { asset('socket.io.js') } }"></script> --}}
  <script src="http://localhost:3000/socket.io/socket.io.js">
  </script>
  <script>
      var socket = io('http://localhost:3000');
      console.log("in the script3",socket);

      console.log('in the script socket',socket);
      socket.on("test-channel:App\\Events\\ChatEvent", function(message){
          console.log('let me in',message);
          console.log("su hnin");
          // increase the power everytime we load test route
          $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
      });
  </script>
</body>
</html>

