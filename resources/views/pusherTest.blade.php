<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = false;

    var pusher = new Pusher('217ffd007f5d425293df', {
      cluster: 'ap2',
      forceTLS: true
    });

    var channel = pusher.subscribe('private-my-channel');
    channel.bind('my-channel', function(data) {
      console.log(JSON.stringify(data));
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-channel</code>.
  </p>
</body>