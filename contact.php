<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
            <title>Contact Us | Central Perk Cafe</title>
            <?php include("include/head.php"); ?>
            <script src="http://maps.googleapis.com/maps/api/js"></script>
            <script>

var map;

/*
 * use google maps api built-in mechanism to attach dom events
 */
google.maps.event.addDomListener(window, "load", function() {

  /*
   * create map
   */
  var map = new google.maps.Map(document.getElementById("map_div"), {
    center: new google.maps.LatLng(40.748775, -73.989785),
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  /*
   * create infowindow (which will be used by markers)
   */
  var infoWindow = new google.maps.InfoWindow();

  /*
   * marker creater function (acts as a closure for html parameter)
   */
  function createMarker(options, html) {
    var marker = new google.maps.Marker(options);
    if (html) {
      google.maps.event.addListener(marker, "click", function() {
        infoWindow.setContent(html);
        infoWindow.open(options.map, this);
      });
    }
    return marker;
  }

  /*
   * add markers to map
   */


  var marker1 = createMarker({
    position: new google.maps.LatLng(40.748775, -73.989785),
    map: map
  }, "<h1>Marker 1</h1> <p>Central Perk!</p>");

});

        </script>
        </head>
        <body>
            <?php include("include/header.php"); ?>
            <div class="maincontainer">
                <h1 style="font-size:2em;">Drop Us a Line!
                    <h1>
                        <hr>
                            <div id="mapwrap">
                                <div id="map_div" style="height: 300px; width:300px;"></div>
                                <br>
                                    <p>Central Perk Cafe</p>
                                    <p>116 W 32nd St, New York, NY 10001</p>
                                    <p>(212) 695-9550</p>
                                    <br>
                                        <p>Hours:</p>
                                        <p>Mon-Fri 6-6</p>
                                        <p>Sat-Sun 8-11</p>
                                    </div>
                                    <form method="post" action="include/send-contact.php">
                                        <div class="form-group">
                Name:
                                            <input name="name" class="form-control" type="text" placeholder="Enter your Name">
                                            </div>
                                            <br>
                                                <div class="form-group">
                Email:
                                                    <input name="email" class="form-control" type="email" placeholder="Enter your Email">
                                                    </div>
                                                    <br>
                                                        <div class="form-group">
                Message:
                                                            <textarea name="message" class="form-control" rows="10" placeholder="Enter your Message" style="width: 20em"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="btn btn-success btn-block" type="submit">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <?php include("include/footer.php"); ?>
                                                </body>
                                            </html>