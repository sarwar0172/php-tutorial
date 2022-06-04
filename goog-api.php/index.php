<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>map</title>
    <script src="googleapi.js"></script>

    <style>
        .container{
            height:450px;
        }
        #map{
            width:100%;
            height:100%;
            border:1px solid blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h1>Access google Maps api in php</h1></center>
        <div id="map"></div>
    </div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChcZK5Ut41qFVNSXIiXIfYs2QBHc5ACfg&callback=initMap&libraries=&v=weekly"defer></script>
</body>
</html>