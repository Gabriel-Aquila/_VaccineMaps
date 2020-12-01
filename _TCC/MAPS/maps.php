<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>VaccineMaps | Localize </title>
    <style>
        #map {
            height: 100%;
        }
        
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /* Styling for Autocomplete search bar */
    #pac-card {
      background-color: #fff;
      border-radius: 2px 0 0 2px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      box-sizing: border-box;
      font-family: Roboto;
      margin: 0px 0px 10px 10px;
      -moz-box-sizing: border-box;
      outline: none;
    }
    
    #pac-container {
      padding-top: 12px;
      padding-bottom: 12px;
      margin-right: 12px;
    }
    
    #pac-input {
      background-color: #fff;
      font-family: Roboto;
      font-size: 15px;
      font-weight: 300;
      margin-left: 12px;
      padding: 0 11px 0 13px;
      text-overflow: ellipsis;
      width: 400px;
    }
    
    #pac-input:focus {
      border-color: #4d90fe;
    }
    
    #title {
      color: #fff;
      background-color: #acbcc9;
      font-size: 18px;
      font-weight: 400;
      padding: 6px 12px;
    }
    
    .hidden {
      display: none;
    }

    /* Styling for an info pane that slides out from the left. 
     * Hidden by default. */
    #panel {
      height: 100%;
      width: null;
      background-color: white;
      position: fixed;
      z-index: 1;
      overflow-x: hidden;
      transition: all .2s ease-out;
    }
    
    .open {
      width: 250px;
    }
    
    .place {
      font-family: 'open sans', arial, sans-serif;
      font-size: 1.2em;
      font-weight: 500;
      margin-block-end: 0px;
      padding-left: 18px;
      padding-right: 18px;
    }
    
    .distanceText {
      color: silver;
      font-family: 'open sans', arial, sans-serif;
      font-size: 1em;
      font-weight: 400;
      margin-block-start: 0.25em;
      padding-left: 18px;
      padding-right: 18px;
    }
    </style>
  </head>

<html>
  <body>
    <div id="map"></div>

    <p>Conhece um posto?<a href="./cadastrar_maps.php"> Compartilhe</a> </p>


    <script src="app.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzHUYzCDL3rIzrBX33QLvI2BDaFA1rcNs&libraries=places&callback=initMap">
    </script>
    <!-- <script src="user_local.js"></script> --> 
  </body>
</html>